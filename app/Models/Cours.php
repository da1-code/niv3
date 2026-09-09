<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'professeur_id',
        'titre',
        'description',
        'fichier'
    ];


    // Le cours appartient à un professeur
    public function professeur()
    {
        return $this->belongsTo(User::class, 'professeur_id');
    }


    // Un cours possède plusieurs fichiers
    public function fichiers()
    {
        return $this->hasMany(FichierCours::class);
    }


    // Progression des étudiants
    public function progressions()
    {
        return $this->hasMany(Progression::class);
    }


    // Avis sur le cours
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }


    // Étudiants inscrits au cours
    public function inscriptions()
    {
        return $this->hasMany(InscriptionCours::class);
    }
}