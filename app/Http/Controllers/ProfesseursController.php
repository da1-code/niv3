<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesseursController extends Controller
{
    public function dashboard(){
        return view('Professeur.dashboard');
    }

    public function cours(){
        return view('Professeur.cours');
    }

    public function parametres(){
        return view('Professeur.parametres');
    }

    public function statistiques(){
        return view('Professeur.statistiques');
    }

    public function examens(){
        return view('Professeur.examens');
    }

    public function etudiants(){
        return view('Professeur.etudiants');
    }
}

