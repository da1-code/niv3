<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Afficher la page d'inscription
     */
    public function showRegistrationForm()
    {
        return view('register');
    }


    /**
     * Enregistrer un nouvel utilisateur
     */
    public function register(Request $request)
    {
        // Validation
        $request->validate([

            'nom' => 'required|string|max:100',

            'prenom' => 'required|string|max:100',

            'email' => 'required|email|max:255|unique:users,email',

            'role' => 'required|in:etudiant,professeur',

            'password' => 'required|min:8|confirmed',

        ]);


        // Création du compte
        $user = User::create([

            'nom' => $request->nom,

            'prenom' => $request->prenom,

            'email' => $request->email,

            'role' => $request->role,

            'password' => Hash::make($request->password),

            'actif' => true,

        ]);


        // Connexion automatique après inscription
        auth()->login($user);


        // Redirection selon le rôle
        if ($user->role === 'professeur') {

            return redirect('/prof/dashboard');

        }


        return redirect('/etudiant/dashboard');
    }
}