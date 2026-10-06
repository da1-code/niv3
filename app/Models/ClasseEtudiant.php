<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClasseEtudiant extends Model
{
     protected $fillable = [
        'idclasse',
        'iduser',
    ];


    /**
     * L'association appartient à une classe
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'idclasse');
    }


    /**
     * L'association appartient à un utilisateur
     */
    public function etudiant()
    {
        return $this->belongsTo(User::class, 'iduser');
    }
}
