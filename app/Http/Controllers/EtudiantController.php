<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Ajoutcours;
use App\Models\Examen;
use App\Models\User;

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

        return view('Etudiant.parametres', compact(
            'etudiant'
        ));
    }
}