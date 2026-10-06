<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Ajoutcours;
use App\Models\Classe;
use App\Models\ClasseEtudiant;
use App\Models\Examen;
use App\Models\ProfilApprentissage;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ACCUEIL
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('Etudiant.index');
    }


    /*
    |--------------------------------------------------------------------------
    | TABLEAU DE BORD
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        $cours = Ajoutcours::latest()->get();

        $examens = Examen::latest()->get();

        $etudiants = User::where('role', 'etudiant')->get();

        $etudiant = Auth::user();

        return view('Etudiant.dashboard', compact(
            'cours',
            'examens',
            'etudiants',
            'etudiant'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | MON PROFIL
    |--------------------------------------------------------------------------
    */

    public function profil()
    {
        $etudiant = Auth::user();

        $nombreCours = Ajoutcours::count();

        $nombreExamens = Examen::count();

        $coursRecents = Ajoutcours::latest()
            ->take(2)
            ->get();

        $examensRecents = Examen::latest()
            ->take(2)
            ->get();

        return view('Etudiant.profil', compact(
            'etudiant',
            'nombreCours',
            'nombreExamens',
            'coursRecents',
            'examensRecents'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | PROFIL D'APPRENTISSAGE
    |--------------------------------------------------------------------------
    */

    public function profil_apprentissage()
    {
        $etudiant = Auth::user();

        return view('Etudiant.profil_apprentissage', compact(
            'etudiant'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | COURS
    |--------------------------------------------------------------------------
    */

    public function cours()
    {
        $cours = Ajoutcours::latest()->get();

        $etudiant = Auth::user();

        return view('Etudiant.cours', compact(
            'cours',
            'etudiant'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | EXAMENS
    |--------------------------------------------------------------------------
    */

    public function examens()
    {
        $examens = Examen::latest()->get();

        $etudiant = Auth::user();

        return view('Etudiant.examens', compact(
            'examens',
            'etudiant'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | MON IA
    |--------------------------------------------------------------------------
    */

    public function ia()
    {
        $etudiant = Auth::user();

        return view('Etudiant.ia', compact(
            'etudiant'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | STATISTIQUES
    |--------------------------------------------------------------------------
    */

    public function statistiques()
    {
        $etudiant = Auth::user();

        /*
        | Nombre réel de cours dans la base
        */
        $nombreCours = Ajoutcours::count();

        /*
        | Nombre réel d'examens dans la base
        */
        $nombreExamens = Examen::count();

        /*
        | Cours récemment ajoutés
        */
        $coursRecents = Ajoutcours::latest()
            ->take(5)
            ->get();

        /*
        | Examens récemment ajoutés
        */
        $examensRecents = Examen::latest()
            ->take(5)
            ->get();

        /*
        | Nombre de documents disponibles
        */
        $nombreDocuments = Ajoutcours::whereNotNull('document')
            ->count();

        return view('Etudiant.statistiques', compact(
            'etudiant',
            'nombreCours',
            'nombreExamens',
            'coursRecents',
            'examensRecents',
            'nombreDocuments'
        ));
    }


    /*
    |--------------------------------------------------------------------------
    | PARAMÈTRES
    |--------------------------------------------------------------------------
    */

   
public function parametres()
{
    
    $etudiant = Auth::user();

    $classes = Classe::orderBy('nom')->get();

    $classeEtudiant = ClasseEtudiant::where(
        'iduser',
        $etudiant->id
    )->first();

    return view('Etudiant.parametres', compact(
        'etudiant',
        'classes',
        'classeEtudiant'
    ));
}

public function updateParametres(Request $request)
{
    $request->validate([
        'name' => 'nullable|string|max:255',

        'email' => 'required|email|max:255',

        'idclasse' => 'required|exists:classes,id',
    ]);


    DB::transaction(function () use ($request) {

        $etudiant = Auth::user();


        // ==========================================
        // 1. MISE À JOUR DU PROFIL
        // ==========================================

        $etudiant->name = $request->name;
        $etudiant->email = $request->email;

        $etudiant->save();


        // ==========================================
        // 2. ENREGISTRER / MODIFIER LA CLASSE
        // ==========================================

        ClasseEtudiant::updateOrCreate(

            [
                'iduser' => $etudiant->id
            ],

            [
                'idclasse' => $request->idclasse
            ]

        );

    });


    return redirect()
        ->back()
        ->with(
            'success',
            'Votre profil, votre classe et votre série ont été mis à jour avec succès.'
        );
}


public function enregistrerProfilApprentissage(Request $request)
{
    // ==========================================
    // UTILISATEUR CONNECTÉ
    // ==========================================

    $etudiant = Auth::user();


    // ==========================================
    // RÉCUPÉRER LA CLASSE DE L'ÉTUDIANT
    // ==========================================

    $classeEtudiant = ClasseEtudiant::where(
        'iduser',
        $etudiant->id
    )->first();


    // Vérifier que l'étudiant possède bien une classe
    if (!$classeEtudiant) {

        return back()->with(
            'error',
            'Vous devez d’abord renseigner votre classe.'
        );
    }


    // ==========================================
    // VALIDATION
    // ==========================================

    $request->validate([

        'type_apprentissage' => 'required|string|max:100',

        'moment_etude' => 'required|string|max:100',

        'duree_etude' => 'required|string|max:100',

        'preference' => 'nullable|array',

        'preference.*' => 'string|max:100',

    ]);


    // ==========================================
    // CRÉER OU METTRE À JOUR LE PROFIL
    // ==========================================

  ProfilApprentissage::updateOrCreate(

        // Recherche du profil existant
        [
            'iduser' => $etudiant->id
        ],

        // Données à créer ou mettre à jour
        [
            'idclasse' => $classeEtudiant->idclasse,

            'type_apprentissage' =>
                $request->type_apprentissage,

            'moment_etude' =>
                $request->moment_etude,

            'duree_etude' =>
                $request->duree_etude,

            'preferences' =>
                $request->preference ?? [],
        ]

    );


    // ==========================================
    // REDIRECTION
    // ==========================================

    return redirect()
        ->back()
        ->with(
            'success',
            'Votre profil d’apprentissage a été enregistré avec succès.'
        );
}

public function chatbot()
{
    $etudiant = Auth::user();

    $cours = Ajoutcours::latest()->get();

    $nombreCours   = $cours->count();
    $nombreExamens = Examen::count();

    return view('Etudiant.chat', compact(
        'etudiant',
        'cours',
        'nombreCours',
        'nombreExamens'
    ));
}
}