<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visita extends Model
{
  use HasFactory;

  protected $table = "visita";

  protected $fillable = [
    'codigo',
    'celular',
    'ci',
    'nombre',
    'placa',
    'observacion',
    'foto',
    'foto2',
    'foto3',
    'foto_salida',
    'foto_salida2',
    'foto_salida3',
    'salio',
    'casa',
    'id_usuario_casa',
    'id_sucursal',
    'created_at',
    'updated_at'
  ];

  public $timestamps = false;

  //protected $timestamps=false;

  public function scopeSucursal($query, $id)
  {
    if (is_null($id)) {
      return $query;
    } else {
      return $query->where('id_sucursal', $id);
    }
  }

  public function scopeCodigo($query, $codigo)
  {
    if (is_null($codigo)) {
      return $query;
    } else {
      return $query->where('codigo',"LIKE", '%'.$codigo.'%');
    }
  }

  public function scopePersonaCI($query, $ci)
  {
    if (is_null($ci)) {
      return $query;
    } else {
      return $query->where('ci',"LIKE", '%'.$ci.'%');
    }
  }

  public function scopeNombre($query, $nombre)
  {
    if (is_null($nombre)) {
      return $query;
    } else {
      return $query->where('nombre',"LIKE", '%'.$nombre.'%');
    }
  }

  public function scopePlaca($query, $placa)
  {
    if (is_null($placa)) {
      return $query;
    } else {
      return $query->where('placa',"LIKE", '%'.$placa.'%');
    }
  }

  public function scopeCasa($query,$id_casa)
  {
    if (is_null($id_casa)) {
      return $query;
    } else {
      return $query->where('id_usuario_casa', $id_casa);
    }
  }
}
