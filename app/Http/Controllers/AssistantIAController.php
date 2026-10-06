<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiService;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\AjoutCours;
use App\Models\ProfilApprentissage;
use App\Services\ExtracteurTexte;

use App\Services\MistralService;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Auth;


class AssistantIAController extends Controller
{
      public function chat(Request $request)
    {
        try {

            /* =================================================
               VALIDATION
            ================================================= */

            $request->validate([
                'message' => 'required|string|max:2000',
            ]);


            $message = $request->input('message');


            /* =================================================
               VÉRIFIER LA CLÉ MISTRAL
            ================================================= */

            $apiKey = config('services.mistral.api_key');

            if (!$apiKey) {

                throw new \Exception(
                    'MISTRAL_API_KEY n\'est pas définie dans le fichier .env'
                );
            }


            /* =================================================
               APPEL API MISTRAL
            ================================================= */

            $response = Http::withToken($apiKey)
                ->timeout(120)
                ->post(
                    'https://api.mistral.ai/v1/chat/completions',
                    [

                        'model' => 'open-mistral-7b',

                        'messages' => [

                            [
                                'role' => 'user',

                                'content' => '
                                    Tu es l\'assistant officiel de Urban Fix.

                                    Urban Fix est une plateforme permettant
                                    aux citoyens de signaler des problèmes
                                    urbains.

                                    Tu aides les utilisateurs concernant :
                                    - les signalements urbains ;
                                    - le suivi des signalements ;
                                    - le fonctionnement de la plateforme ;
                                    - la création de compte ;
                                    - la connexion ;
                                    - les démarches disponibles sur Urban Fix.

                                    Réponds toujours en français.

                                    Sois poli, professionnel, simple et précis.

                                    N\'invente jamais une fonctionnalité.

                                    Ne demande jamais de mot de passe,
                                    de code PIN ou de données bancaires.

                                    Ne prétends jamais avoir accès aux
                                    données personnelles d\'un utilisateur.
                                '
                            ],

                            [
                                'role' => 'user',

                                'content' => $message
                            ]

                        ],

                        'temperature' => 0.3,

                        'max_tokens' => 500,

                    ]
                );


            /* =================================================
               SI MISTRAL RENVOIE UNE ERREUR
            ================================================= */

            if (!$response->successful()) {

                Log::error(
                    'Erreur API Mistral',
                    [
                        'status' => $response->status(),
                        'body' => $response->body()
                    ]
                );


                return response()->json([
                    'success' => false,

                    'response' =>
                        'Le service IA a rencontré une erreur.',

                    'error' =>
                        $response->json()

                ], 500);
            }


            /* =================================================
               RÉCUPÉRER LA RÉPONSE
            ================================================= */

            $data = $response->json();


            $answer =
                $data['choices'][0]['message']['content']
                ?? null;


            if (!$answer) {

                throw new \Exception(
                    'Mistral n\'a retourné aucune réponse.'
                );
            }


            /* =================================================
               RETOURNER AU JAVASCRIPT
            ================================================= */

            return response()->json([

                'success' => true,

                'response' => $answer

            ]);


        } catch (\Throwable $e) {


            /* =================================================
               LOG
            ================================================= */

            Log::error(
                'Erreur Chatbot Urban Fix',
                [
                    'message' =>
                        $e->getMessage(),

                    'file' =>
                        $e->getFile(),

                    'line' =>
                        $e->getLine()
                ]
            );


            /* =================================================
               RETOURNER ERREUR
            ================================================= */

            return response()->json([

                'success' => false,

                'response' =>
                    'Une erreur est survenue avec l\'assistant.',

                'error' =>
                    $e->getMessage()

            ], 500);
        }
    }



public function __construct(
        private GeminiService $ia,
        private ExtracteurTexte $extracteur
    ) {}

    private function profil(): ?ProfilApprentissage
{
    return ProfilApprentissage::where('iduser', Auth::id())->first();;
}

private function autoriser(AjoutCours $cours): void
{
    $profil = $this->profil();

    if ($profil && (int) $cours->idclasse !== (int) $profil->idclasse) {
        abort(403, "Ce cours n'appartient pas à ta classe.");
    }
}

public function cours()
{
    $profil = $this->profil();

    $cours = AjoutCours::query()
        ->when($profil?->idclasse, fn ($q, $id) => $q->where('idclasse', $id))
        ->orderBy('titre')
        ->get(['id', 'titre', 'description', 'serie']);

    return response()->json($cours);
}

private function texteDuCours(AjoutCours $cours): string
{
    $doc = $cours->document;

    $candidats = $doc ? [
        Storage::disk('public')->path($doc),
        storage_path('app/' . $doc),
        public_path($doc),
        public_path('storage/' . $doc),
    ] : [];

    foreach ($candidats as $chemin) {
        if (is_file($chemin)) {
            return $this->extracteur->extraire($chemin);
        }
    }

    throw new \RuntimeException("Fichier du cours introuvable ({$doc}).");
}

private function executer(AjoutCours $cours, \Closure $action)
{
    try {
        $this->autoriser($cours);

        $r = $action($this->texteDuCours($cours), $this->profil());

        return response()->json($r, $r['success'] ? 200 : 503);

    } catch (HttpException $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], $e->getStatusCode());
    } catch (\Throwable $e) {
        Log::error('IA cours', ['cours' => $cours->id, 'error' => $e->getMessage()]);

        return response()->json([
            'success' => false,
            // le détail technique n'est montré qu'en mode debug
            'message' => config('app.debug')
                ? $e->getMessage()
                : "Impossible d'analyser ce cours pour le moment.",
        ], 500);
    }
}

public function expliquer(AjoutCours $cours)
{
    return $this->executer($cours, fn ($texte, $profil) =>
        $this->ia->expliquerCours($cours, $texte, $profil));
}

public function recommander(AjoutCours $cours)
{
    return $this->executer($cours, fn ($texte, $profil) =>
        $this->ia->recommander($cours, $texte, $profil));
}

public function exercices(Request $request, AjoutCours $cours)
{
    $data = $request->validate([
        'nombre'     => 'nullable|integer|min:1|max:10',
        'difficulte' => 'nullable|in:facile,moyen,difficile',
    ]);

    return $this->executer($cours, fn ($texte, $profil) =>
        $this->ia->genererExercices($cours, $texte, $data['nombre'] ?? 5, $data['difficulte'] ?? 'moyen', $profil));
}

    public function ask(Request $request, GeminiService $gemini)
    {
        $request->validate([
            'question' => 'required|string|max:1000',
        ]);

        $etudiant = auth()->user();

        $systemInstruction = "Tu es EDUNOVA IA, un assistant pédagogique pour {$etudiant->prenom}, "
            . "un(e) étudiant(e). Réponds en français, de façon claire et concise, "
            . "et adapte tes explications à un niveau étudiant.";

        $result = $gemini->ask($request->input('question'), $systemInstruction);

        return response()->json($result);
    }
    
}
