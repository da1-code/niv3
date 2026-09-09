<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscriptionCours extends Model
{
    protected $fillable = [
        'user_id',
        'cours_id',
        'date_inscription'
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