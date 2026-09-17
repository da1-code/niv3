<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Afficher la page de connexion
     */
   public function showLogin()
{
    return view('auth.login');
}

    /**
     * Traiter la connexion
     */
    public function login(Request $request)
    {
        // Vérification des champs
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Vérifier les identifiants
        if (Auth::attempt($credentials)) {

            // Régénérer la session pour la sécurité
            $request->session()->regenerate();

            // Redirection selon le rôle
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            }

            if ($user->role === 'professeur') {
                return redirect('/prof/dashboard');
            }

            if ($user->role === 'etudiant') {
                return redirect('/etudiant/dashboard');
            }

            // Si aucun rôle reconnu
            Auth::logout();

            return back()->withErrors([
                'email' => 'Rôle utilisateur non reconnu.',
            ]);
        }

        // Identifiants incorrects
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ])->onlyInput('email');
    }

    /**
     * Déconnexion
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}