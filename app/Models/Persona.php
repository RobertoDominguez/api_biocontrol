<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Persona extends Model
{
    use HasFactory;

    protected $table = "persona";

    protected $fillable = [
        'codigo',
        'nombres',
        'apellidos',
        'numero_item',
        'otros'
    ];


    protected $hidden = [
        "fotografia",
        "fotografia_binary",
    ];

    public function sucursales(): HasManyThrough
    {
        return $this->hasManyThrough(Sucursal::class, PersonaSucursal::class, 'id_persona', 'id', 'id', 'id_sucursal');
    }

    public function grupos(): HasManyThrough
    {
        return $this->hasManyThrough(Sucursal::class, PersonaGrupo::class, 'id_persona', 'id', 'id', 'id_grupo');
    }

    public function secciones(): HasManyThrough
    {
        return $this->hasManyThrough(Sucursal::class, PersonaSeccion::class, 'id_persona', 'id', 'id', 'id_seccion');
    }
}
