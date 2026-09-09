<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationIa extends Model
{
    protected $fillable = [
        'user_id',
        'question',
        'reponse'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}