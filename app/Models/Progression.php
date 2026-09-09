<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progression extends Model
{
    protected $fillable = [
        'user_id',
        'cours_id',
        'pourcentage',
        'statut',
        'derniere_consultation'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}