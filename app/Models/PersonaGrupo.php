<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaGrupo extends Model
{
    use HasFactory;

    protected $table="PersonaGrupo";

    protected $fillable=[
        'id_grupo',
        'id_persona'
    ];
}
