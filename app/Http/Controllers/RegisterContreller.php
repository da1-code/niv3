<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Afficher la page d'inscription
     */
    public function showRegistrationForm()
    {
        // Récupérer toutes les classes
        $classes = Classe::orderBy('nom', 'asc')->get();

        return view('register', compact('classes'));
    }


    /**
     * Enregistrer un nouvel utilisateur
     */
    public function register(Request $request)
    {
        // Validation
        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|max:255|unique:users,email',

            'idclasse' => 'required|exists:classes,id',

            'password' => 'required|min:8|confirmed',

        ]);


        // Création du compte
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            // Tout nouvel inscrit est étudiant
            'role' => 'etudiant',

            // Enregistrement de sa classe
            'idclasse' => $request->idclasse,

            'password' => Hash::make($request->password),

            'actif' => true,

        ]);


        // Connexion automatique après inscription
        Auth::login($user);


        // Redirection vers le dashboard étudiant
        return redirect()->route('etudiant.dashboard');
    }
}