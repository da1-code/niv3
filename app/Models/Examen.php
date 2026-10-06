<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examens';

    protected $fillable = [
        'idprof',
        'idclasse',
        'titre',
        'description',
        'cours',
        'serie',
        'date_examen',
        'document',
        'statut',
        'actif',
    ];
}