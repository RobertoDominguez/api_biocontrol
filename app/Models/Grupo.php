<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table="grupo";
    
    protected $fillable=[
        'nombre'
    ];

    public function scopeSucursal($query, $id)
    {
      if (is_null($id)) {
        return $query;
      } else {
        return $query->where('id_sucursal', $id);
      }
    }
}
