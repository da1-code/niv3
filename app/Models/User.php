<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'actif',
        'idclasse',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATION AVEC LA CLASSE
    |--------------------------------------------------------------------------
    */

    public function classe()
    {
        return $this->belongsTo(
            Classe::class,
            'idclasse'
        );
    }
    public function profilApprentissage()
{
    return $this->hasOne(
        ProfilApprentissage::class,
        'iduser'
    );
}
}