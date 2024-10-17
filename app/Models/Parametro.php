<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;


    protected $table = "parametro";


    protected $fillable = [
        'clave',
        'valor'
    ];


    public function scopeSancionAtrasos($query)
    {
        return json_decode($query->where('clave', 'SancionAtrasos')->get()->first()->valor, true);
    }

    public function scopeSancionFaltas($query)
    {
        return json_decode($query->where('clave', 'SancionFaltas')->get()->first()->valor, true);
    }

    public function scopeSancionAbandonos($query)
    {
        return json_decode($query->where('clave', 'SancionAbandonos')->get()->first()->valor, true);
    }
}
