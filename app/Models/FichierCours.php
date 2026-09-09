<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichierCours extends Model
{
    protected $fillable = [
        'cours_id',
        'nom_fichier',
        'chemin',
        'type'
    ];


    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}