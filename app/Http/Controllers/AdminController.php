<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Administrateur.dashboard');
    }

    public function cours(){
        return view('Administrateur.cours');
    }

    public function users(){
        return view('Administrateur.users');
    }

    public function parametres(){
        return view('Administrateur.parametres');
    }

    public function statistiques(){
        return view('Administrateur.statistiques');
    }

    public function etudiants(){
        return view('Administrateur.etudiants');
    }

    public function professeurs()
    {
    return view('Administrateur.professeurs');
    }

    public function examens(){
        return view('Administrateur.examens');
    }
}

