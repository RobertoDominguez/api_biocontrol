<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaSeccion extends Model
{
    use HasFactory;

    protected $table="PersonaSeccion";

    protected $fillable=[
        'id_seccion',
        'id_persona'
    ];
}
