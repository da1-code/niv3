<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Classe;
use App\Models\ajoutcours;
use App\Models\Examen;


class AdminController
{

    /* =====================================================
       DASHBOARD ADMIN
    ====================================================== */

    public function dashboard()
    {
        $totalUtilisateurs = User::count();

        $totalEtudiants = User::where(
            'role',
            'etudiant'
        )->count();

        $totalEnseignants = User::where(
            'role',
            'professeur'
        )->count();

        $totalAdministrateurs = User::where(
            'role',
            'admin'
        )->count();

        $totalClasses = Classe::count();

        $totalCours = ajoutcours::count();

        $totalExamens = Examen::count();


        $nombreUtilisateurs = $totalUtilisateurs;

        $nombreEtudiants = $totalEtudiants;

        $nombreProfesseurs = $totalEnseignants;

        $nombreEnseignants = $totalEnseignants;

        $nombreAdministrateurs = $totalAdministrateurs;

        $nombreClasses = $totalClasses;

        $nombreCours = $totalCours;

        $nombreExamens = $totalExamens;


        $utilisateursRecents = User::orderBy(
            'created_at',
            'desc'
        )
        ->take(5)
        ->get();


        return view(
            'Administrateur.dashboard',
            compact(
                'totalUtilisateurs',
                'totalEtudiants',
                'totalEnseignants',
                'totalAdministrateurs',
                'totalClasses',
                'totalCours',
                'totalExamens',

                'nombreUtilisateurs',
                'nombreEtudiants',
                'nombreProfesseurs',
                'nombreEnseignants',
                'nombreAdministrateurs',
                'nombreClasses',
                'nombreCours',
                'nombreExamens',

                'utilisateursRecents'
            )
        );
    }



    /* =====================================================
       UTILISATEURS
    ====================================================== */

    public function users()
    {
        $users = User::orderBy(
            'created_at',
            'desc'
        )->get();

        return view(
            'Administrateur.users',
            compact('users')
        );
    }



    /* =====================================================
       ÉTUDIANTS
    ====================================================== */

    public function etudiants()
    {
        $etudiants = User::where(
            'role',
            'etudiant'
        )
        ->with('classe')
        ->orderBy(
            'created_at',
            'desc'
        )
        ->get();


        $totalEtudiants = $etudiants->count();


        $etudiantsActifs = $etudiants
            ->where('actif', true)
            ->count();


        $etudiantsInactifs = $etudiants
            ->where('actif', false)
            ->count();


        $nouveauxEtudiants = User::where(
            'role',
            'etudiant'
        )
        ->where(
            'created_at',
            '>=',
            now()->subDays(30)
        )
        ->count();


        $etudiantsDesactives = $etudiantsInactifs;


        return view(
            'Administrateur.etudiants',
            compact(
                'etudiants',
                'totalEtudiants',
                'etudiantsActifs',
                'etudiantsInactifs',
                'nouveauxEtudiants',
                'etudiantsDesactives'
            )
        );
    }



    /* =====================================================
       ENSEIGNANTS
    ====================================================== */

    public function professeurs()
    {
        $professeurs = User::where(
            'role',
            'professeur'
        )
        ->orderBy(
            'created_at',
            'desc'
        )
        ->get();


        $totalProfesseurs = $professeurs->count();


        $professeursActifs = $professeurs
            ->where('actif', true)
            ->count();


        $professeursInactifs = $professeurs
            ->where('actif', false)
            ->count();


        $totalCours = ajoutcours::count();


        return view(
            'Administrateur.professeurs',
            compact(
                'professeurs',
                'totalProfesseurs',
                'professeursActifs',
                'professeursInactifs',
                'totalCours'
            )
        );
    }



    /* =====================================================
       CLASSES
    ====================================================== */

    public function classes()
    {
        $classes = Classe::orderBy(
            'nom',
            'asc'
        )->get();


        return view(
            'Administrateur.classes',
            compact('classes')
        );
    }



    /* =====================================================
       AJOUTER UNE CLASSE
    ====================================================== */

    public function store(Request $request)
    {
        $request->validate([

            'nom' => [
                'required',
                'string',
                'max:255',
                'unique:classes,nom'
            ],

            'serie' => [
                'required',
                'string',
                'max:255'
            ]

        ]);


        Classe::create([

            'nom' => $request->nom,

            'serie' => $request->serie,

        ]);


        return redirect()
            ->route('admin.classes')
            ->with(
                'success',
                'La classe a été ajoutée avec succès.'
            );
    }



    /* =====================================================
       MODIFIER UNE CLASSE
    ====================================================== */

    public function updateClasse(
        Request $request,
        Classe $classe
    )
    {
        $request->validate([

            'nom' => [
                'required',
                'string',
                'max:255',
                'unique:classes,nom,' . $classe->id
            ],

            'serie' => [
                'required',
                'string',
                'max:255'
            ]

        ]);


        $classe->update([

            'nom' => $request->nom,

            'serie' => $request->serie,

        ]);


        return redirect()
            ->route('admin.classes')
            ->with(
                'success',
                'La classe a été modifiée avec succès.'
            );
    }



    /* =====================================================
       SUPPRIMER UNE CLASSE
    ====================================================== */

    public function destroyClasse(
        Classe $classe
    )
    {
        $classe->delete();


        return redirect()
            ->route('admin.classes')
            ->with(
                'success',
                'La classe a été supprimée avec succès.'
            );
    }



    /* =====================================================
       VOIR UNE CLASSE
    ====================================================== */

    public function showClasse(
        Classe $classe
    )
    {
        return view(
            'Administrateur.classe-details',
            compact('classe')
        );
    }



    /* =====================================================
       COURS
    ====================================================== */

    public function cours()
    {
        $cours = ajoutcours::orderBy(
            'created_at',
            'desc'
        )->get();


        $totalCours = $cours->count();


        $enseignants = User::where(
            'role',
            'professeur'
        )->get();


        return view(
            'Administrateur.cours',
            compact(
                'cours',
                'totalCours',
                'enseignants'
            )
        );
    }



    /* =====================================================
       EXAMENS
    ====================================================== */

    public function examens()
    {
        $examens = Examen::orderBy(
            'created_at',
            'desc'
        )->get();


        $totalExamens = $examens->count();


        $enseignants = User::where(
            'role',
            'professeur'
        )->get();


        return view(
            'Administrateur.examens',
            compact(
                'examens',
                'totalExamens',
                'enseignants'
            )
        );
    }



    /* =====================================================
       STATISTIQUES
    ====================================================== */

    public function statistiques()
    {
        /* ================================================
           STATISTIQUES GENERALES
        ================================================= */

        $totalUtilisateurs = User::count();


        $totalEtudiants = User::where(
            'role',
            'etudiant'
        )->count();


        $totalProfesseurs = User::where(
            'role',
            'professeur'
        )->count();


        $totalClasses = Classe::count();


        $totalCours = ajoutcours::count();


        $totalExamens = Examen::count();


        $utilisateursActifs = User::where(
            'actif',
            true
        )->count();



        /* ================================================
           ANNEE DU GRAPHIQUE
        ================================================= */

        $annee = now()->year;



        /* ================================================
           INSCRIPTIONS PAR MOIS
        ================================================= */

        $valeursGraphique = [];


        for ($mois = 1; $mois <= 12; $mois++) {

            $valeursGraphique[$mois] = User::where(
                'role',
                'etudiant'
            )
            ->whereYear(
                'created_at',
                $annee
            )
            ->whereMonth(
                'created_at',
                $mois
            )
            ->count();

        }



        /* ================================================
           NOMS DES MOIS
        ================================================= */

        $moisGraphique = [

            1 => 'Jan',

            2 => 'Fév',

            3 => 'Mar',

            4 => 'Avr',

            5 => 'Mai',

            6 => 'Juin',

            7 => 'Juil',

            8 => 'Août',

            9 => 'Sep',

            10 => 'Oct',

            11 => 'Nov',

            12 => 'Déc'

        ];



        /* ================================================
           ENVOI DES DONNEES A LA VUE
        ================================================= */

        return view(
            'Administrateur.statistiques',
            compact(
                'totalUtilisateurs',
                'totalEtudiants',
                'totalProfesseurs',
                'totalClasses',
                'totalCours',
                'totalExamens',
                'utilisateursActifs',
                'annee',
                'moisGraphique',
                'valeursGraphique'
            )
        );
    }



    /* =====================================================
       PARAMÈTRES
    ====================================================== */

    public function parametres()
    {
        $user = Auth::user();


        return view(
            'Administrateur.parametres',
            compact('user')
        );
    }



    /* =====================================================
       MODIFIER LE COMPTE ADMIN
    ====================================================== */

    public function modifierCompte(
        Request $request
    )
    {
        $user = Auth::user();


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
            ]

        ]);


        $user->update([

            'name' => $request->name,

            'email' => $request->email,

        ]);


        return back()->with(
            'success',
            'Vos informations ont été mises à jour avec succès.'
        );
    }



    /* =====================================================
       MODIFIER LE MOT DE PASSE ADMIN
    ====================================================== */

    public function modifierMotDePasse(
        Request $request
    )
    {
        $request->validate([

            'ancien_password' => [
                'required'
            ],

            'nouveau_password' => [
                'required',
                'min:8',
                'confirmed'
            ]

        ]);


        $user = Auth::user();


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


        $user->update([

            'password' => Hash::make(
                $request->nouveau_password
            ),

        ]);


        return back()->with(
            'success',
            'Votre mot de passe a été modifié avec succès.'
        );
    }


}