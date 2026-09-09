<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index (){
        return view('Etudiant.index');
    }

    public function dashboard(){
        return view('Etudiant.dashboard');
    }

    public function profil(){
        return view('Etudiant.profil');
            }

    public function profil_apprentissage(){
        return view('Etudiant.profil_apprentissage');
    }       
    
    public function cours(){
        return view('Etudiant.cours');
    }

    public function examens(){
        return view('Etudiant.examens');
    }

    public function statistiques(){
        return view('Etudiant.statistiques');
    }

    public function parametres(){
        return view('Etudiant.parametres');
    }
}
