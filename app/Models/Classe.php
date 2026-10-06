<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    protected $fillable = [
        'nom',
        'serie',
        
    ];
    public function classeEtudiants()
    {
        return $this->hasMany(
            ClasseEtudiant::class,
            'idclasse'
        );
    }
    public function profilsApprentissage()
{
    return $this->hasMany(
        ProfilApprentissage::class,
        'idclasse'
    );
}
}
