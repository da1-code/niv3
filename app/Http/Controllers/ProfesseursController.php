<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Examen;
use App\Models\AjoutCours;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfesseursController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function dashboard()
    {
        $professeurId = Auth::id();

        /*
        |--------------------------------------------------------------------------
        | COURS DU PROFESSEUR
        |--------------------------------------------------------------------------
        */

        $cours = AjoutCours::where(
            'idprof',
            $professeurId
        )
        ->orderBy('created_at', 'desc')
        ->get();


        /*
        |--------------------------------------------------------------------------
        | EXAMENS DU PROFESSEUR
        |--------------------------------------------------------------------------
        */

        $examens = Examen::where(
            'idprof',
            $professeurId
        )
        ->orderBy('created_at', 'desc')
        ->get();


        /*
        |--------------------------------------------------------------------------
        | STATISTIQUES COURS
        |--------------------------------------------------------------------------
        */

        $totalCours = $cours->count();

        $totalExamens = $examens->count();


        $coursPublies = $cours
            ->where('statut', 'publie')
            ->count();


        $coursBrouillons = $cours
            ->where('statut', 'brouillon')
            ->count();


        /*
        |--------------------------------------------------------------------------
        | NOMBRE DE CLASSES
        |--------------------------------------------------------------------------
        */

        $classes = $cours
            ->pluck('idclasse')
            ->filter()
            ->unique()
            ->count();


        /*
        |--------------------------------------------------------------------------
        | ÉTUDIANTS
        |--------------------------------------------------------------------------
        |
        | Les statistiques IA seront ajoutées plus tard.
        |
        */

        $totalEtudiants = 0;

        $progressionMoyenne = 0;


        /*
        |--------------------------------------------------------------------------
        | DERNIERS COURS
        |--------------------------------------------------------------------------
        */

        $derniersCours = $cours->take(5);


        /*
        |--------------------------------------------------------------------------
        | DERNIERS EXAMENS
        |--------------------------------------------------------------------------
        */

        $derniersExamens = $examens->take(5);


        /*
        |--------------------------------------------------------------------------
        | ACTIVITÉS
        |--------------------------------------------------------------------------
        */

        $activites = [];


        return view(
            'Professeur.dashboard',
            compact(
                'cours',
                'examens',
                'totalCours',
                'totalExamens',
                'coursPublies',
                'coursBrouillons',
                'classes',
                'totalEtudiants',
                'progressionMoyenne',
                'derniersCours',
                'derniersExamens',
                'activites'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MES COURS
    |--------------------------------------------------------------------------
    */

    public function cours()
    {
        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRATION DES CLASSES
        |--------------------------------------------------------------------------
        */

        $classes = Classe::orderBy(
            'nom',
            'asc'
        )->get();


        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRATION DES COURS DU PROFESSEUR
        |--------------------------------------------------------------------------
        */

        $cours = AjoutCours::where(
            'idprof',
            Auth::id()
        )
        ->orderBy(
            'created_at',
            'desc'
        )
        ->get();


        return view(
            'Professeur.cours',
            compact(
                'classes',
                'cours'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | PARAMÈTRES
    |--------------------------------------------------------------------------
    */

    public function parametres()
    {
        /*
        |--------------------------------------------------------------------------
        | UTILISATEUR CONNECTÉ
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();


        return view(
            'Professeur.parametres',
            compact('user')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | MODIFIER LES INFORMATIONS DU COMPTE
    |--------------------------------------------------------------------------
    */

    public function modifierCompte(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | UTILISATEUR CONNECTÉ
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();


        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'name' => [
                'required',
                'string',
                'max:255'
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | MISE À JOUR
        |--------------------------------------------------------------------------
        |
        | On utilise User::where() afin d'éviter
        | le problème signalé sur $user->update().
        |
        */

        User::where(
            'id',
            $user->id
        )->update([

            'name' => $request->name,

            'email' => $request->email,

        ]);


        /*
        |--------------------------------------------------------------------------
        | RETOUR
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('prof.parametres')
            ->with(
                'success',
                'Vos informations ont été mises à jour avec succès.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | MODIFIER LE MOT DE PASSE
    |--------------------------------------------------------------------------
    */

    public function modifierMotDePasse(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'ancien_password' => [
                'required'
            ],

            'nouveau_password' => [
                'required',
                'min:8',
                'confirmed'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | UTILISATEUR CONNECTÉ
        |--------------------------------------------------------------------------
        */

        $user = Auth::user();


        /*
        |--------------------------------------------------------------------------
        | VÉRIFICATION DE L'ANCIEN MOT DE PASSE
        |--------------------------------------------------------------------------
        */

        if (
            !Hash::check(
                $request->ancien_password,
                $user->password
            )
        ) {

            return back()
                ->withErrors([

                    'ancien_password' =>
                        'L’ancien mot de passe est incorrect.'

                ])
                ->withInput();

        }


        /*
        |--------------------------------------------------------------------------
        | ENREGISTREMENT DU NOUVEAU MOT DE PASSE
        |--------------------------------------------------------------------------
        */

        User::where(
            'id',
            $user->id
        )->update([

            'password' => Hash::make(
                $request->nouveau_password
            ),

        ]);


        /*
        |--------------------------------------------------------------------------
        | RETOUR
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('prof.parametres')
            ->with(
                'success',
                'Votre mot de passe a été modifié avec succès.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | STATISTIQUES
    |--------------------------------------------------------------------------
    */

    public function statistiques()
    {
        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRATION DES ÉTUDIANTS
        |--------------------------------------------------------------------------
        */

        $etudiants = User::with('classe')
            ->where(
                'role',
                'etudiant'
            )
            ->orderBy(
                'created_at',
                'desc'
            )
            ->get();


        /*
        |--------------------------------------------------------------------------
        | TOTAL ÉTUDIANTS
        |--------------------------------------------------------------------------
        */

        $totalEtudiants = $etudiants->count();


        /*
        |--------------------------------------------------------------------------
        | ÉTUDIANTS ACTIFS
        |--------------------------------------------------------------------------
        */

        $etudiantsActifs = $etudiants
            ->where(
                'actif',
                true
            )
            ->count();


        /*
        |--------------------------------------------------------------------------
        | ÉTUDIANTS INACTIFS
        |--------------------------------------------------------------------------
        */

        $etudiantsInactifs = $etudiants
            ->where(
                'actif',
                false
            )
            ->count();


        /*
        |--------------------------------------------------------------------------
        | CLASSES REPRÉSENTÉES
        |--------------------------------------------------------------------------
        */

        $totalClasses = $etudiants
            ->pluck('idclasse')
            ->filter()
            ->unique()
            ->count();


        return view(
            'Professeur.statistiques',
            compact(
                'etudiants',
                'totalEtudiants',
                'etudiantsActifs',
                'etudiantsInactifs',
                'totalClasses'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | EXAMENS
    |--------------------------------------------------------------------------
    */

    public function examens()
    {
        /*
        |--------------------------------------------------------------------------
        | CLASSES
        |--------------------------------------------------------------------------
        */

        $classes = Classe::orderBy(
            'nom',
            'asc'
        )->get();


        /*
        |--------------------------------------------------------------------------
        | COURS DU PROFESSEUR
        |--------------------------------------------------------------------------
        */

        $cours = AjoutCours::where(
            'idprof',
            Auth::id()
        )
        ->orderBy(
            'created_at',
            'desc'
        )
        ->get();


        /*
        |--------------------------------------------------------------------------
        | EXAMENS DU PROFESSEUR
        |--------------------------------------------------------------------------
        */

        $examens = Examen::where(
            'idprof',
            Auth::id()
        )
        ->orderBy(
            'created_at',
            'desc'
        )
        ->get();


        /*
        |--------------------------------------------------------------------------
        | STATISTIQUES
        |--------------------------------------------------------------------------
        */

        $totalExamens = $examens->count();


        $examensPublies = $examens
            ->where(
                'statut',
                'publie'
            )
            ->count();


        $examensBrouillons = $examens
            ->where(
                'statut',
                'brouillon'
            )
            ->count();


        return view(
            'Professeur.examens',
            compact(
                'classes',
                'cours',
                'examens',
                'totalExamens',
                'examensPublies',
                'examensBrouillons'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | ÉTUDIANTS
    |--------------------------------------------------------------------------
    */

    public function etudiants()
    {
        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRATION DES ÉTUDIANTS
        |--------------------------------------------------------------------------
        */

        $etudiants = User::with('classe')
            ->where(
                'role',
                'etudiant'
            )
            ->orderBy(
                'created_at',
                'desc'
            )
            ->get();


        /*
        |--------------------------------------------------------------------------
        | TOTAL
        |--------------------------------------------------------------------------
        */

        $totalEtudiants = $etudiants->count();


        /*
        |--------------------------------------------------------------------------
        | ACTIFS
        |--------------------------------------------------------------------------
        */

        $etudiantsActifs = $etudiants
            ->where(
                'actif',
                true
            )
            ->count();


        /*
        |--------------------------------------------------------------------------
        | INACTIFS
        |--------------------------------------------------------------------------
        */

        $etudiantsDesactives = $etudiants
            ->where(
                'actif',
                false
            )
            ->count();


        /*
        |--------------------------------------------------------------------------
        | NOUVEAUX ÉTUDIANTS
        |--------------------------------------------------------------------------
        */

        $debutMois = now()->startOfMonth();


        $nouveauxEtudiants = $etudiants
            ->where(
                'created_at',
                '>=',
                $debutMois
            )
            ->count();


        return view(
            'Professeur.etudiants',
            compact(
                'etudiants',
                'totalEtudiants',
                'etudiantsActifs',
                'nouveauxEtudiants',
                'etudiantsDesactives'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | AJOUTER UN COURS
    |--------------------------------------------------------------------------
    */

    public function ajoutcours(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'titre' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'required',
                'string'
            ],

            'idclasse' => [
                'required',
                'exists:classes,id'
            ],

            'serie' => [
                'required',
                'string'
            ],

            'document' => [
                'required',
                'file',
                'mimes:pdf,doc,docx,ppt,pptx',
                'max:10240'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRER LA CLASSE
        |--------------------------------------------------------------------------
        */

        $classe = Classe::findOrFail(
            $request->idclasse
        );


        /*
        |--------------------------------------------------------------------------
        | DOCUMENT
        |--------------------------------------------------------------------------
        */

        $document = null;


        if (
            $request->hasFile('document')
        ) {

            $document = $request
                ->file('document')
                ->store(
                    'cours',
                    'public'
                );

        }


        /*
        |--------------------------------------------------------------------------
        | CRÉATION DU COURS
        |--------------------------------------------------------------------------
        */

        AjoutCours::create([

            'idprof' => Auth::id(),

            'idclasse' => $classe->id,

            'titre' => $request->titre,

            'description' => $request->description,

            'classe' => $classe->nom,

            'serie' => $request->serie,

            'document' => $document,

        ]);


        /*
        |--------------------------------------------------------------------------
        | RETOUR
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('prof.cours')
            ->with(
                'success',
                'Le cours a été ajouté avec succès.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | AJOUTER UN EXAMEN
    |--------------------------------------------------------------------------
    */

    public function ajoutExamen(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'titre' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'required',
                'string'
            ],

            'idclasse' => [
                'required',
                'exists:classes,id'
            ],

            'idcours' => [
                'required'
            ],

            'serie' => [
                'required',
                'string'
            ],

            'date' => [
                'required',
                'date'
            ],

            'document' => [
                'required',
                'file',
                'mimes:pdf,doc,docx,ppt,pptx',
                'max:10240'
            ],

            'statut' => [
                'required'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | RÉCUPÉRER LA CLASSE
        |--------------------------------------------------------------------------
        */

        $classe = Classe::findOrFail(
            $request->idclasse
        );


        /*
        |--------------------------------------------------------------------------
        | DOCUMENT
        |--------------------------------------------------------------------------
        */

        $document = null;


        if (
            $request->hasFile('document')
        ) {

            $document = $request
                ->file('document')
                ->store(
                    'examens',
                    'public'
                );

        }


        /*
        |--------------------------------------------------------------------------
        | CRÉATION DE L'EXAMEN
        |--------------------------------------------------------------------------
        */

        Examen::create([

            'idprof' => Auth::id(),

            'idclasse' => $classe->id,

            'idcours' => $request->idcours,

            'titre' => $request->titre,

            'description' => $request->description,

            'classe' => $classe->nom,

            'serie' => $request->serie,

            'date' => $request->date,

            'document' => $document,

            'statut' => $request->statut,

        ]);


        /*
        |--------------------------------------------------------------------------
        | RETOUR
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('prof.examens')
            ->with(
                'success',
                'L’examen a été ajouté avec succès.'
            );
    }

}