<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
        'role',
        'actif'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    // Un professeur possède plusieurs cours
    public function cours()
    {
        return $this->hasMany(Cours::class, 'professeur_id');
    }


    // Un étudiant possède un profil d'apprentissage
    public function profilApprentissage()
    {
        return $this->hasOne(ProfilApprentissage::class);
    }


    // Historique des conversations IA
    public function conversationsIa()
    {
        return $this->hasMany(ConversationIa::class);
    }


    // Inscriptions aux cours
    public function inscriptionsCours()
    {
        return $this->hasMany(InscriptionCours::class);
    }


    // Progression dans les cours
    public function progressions()
    {
        return $this->hasMany(Progression::class);
    }


    // Avis donnés
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}