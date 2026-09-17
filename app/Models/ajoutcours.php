<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AjoutCours extends Model { 
    protected $table = 'ajoutcours'; 
    protected $fillable = [ 'idprof', 'idclasse', 'titre', 'description', 'classe', 'serie', 'document', ]; }