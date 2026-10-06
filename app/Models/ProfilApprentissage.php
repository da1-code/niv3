<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilApprentissage extends Model
{
    
    //protected $table = 'profil_apprentissages';

    protected $fillable = [
        'iduser',
        'idclasse',
        'type_apprentissage',
        'moment_etude',
        'duree_etude',
        'preferences',
    ];

    protected $casts = [
        'preferences' => 'array',
    ];


    /**
     * Le profil appartient à un utilisateur
     */
    public function utilisateur()
    {
        return $this->belongsTo(
            User::class,
            'iduser'
        );
    }


    /**
     * Le profil appartient à une classe
     */
    public function classe()
    {
        return $this->belongsTo(
            Classe::class,
            'idclasse'
        );
    }
}
