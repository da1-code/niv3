<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ajoutercours extends Model
{
    protected $table = 'ajoutcours';

    protected $fillable = [
        'idprof',
        'idclasse',
        'titre',
        'description',
        'classe',
        'serie',
        'document',
    ];
}