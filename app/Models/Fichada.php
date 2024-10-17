<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichada extends Model
{
    use HasFactory;

    protected $table="fichada";

    protected $fillable=[
        'id_sucursal',
        'codigo',
        'fecha',
        'hostname',
        'ip',
        'manual',
        'usado',
        'evento'
    ];

    public $timestamps=false;

    public function scopeSucursal($query,$id){
        if (is_null($id)) { return $query; }else{ return $query->where('id_sucursal',$id); }
    }

    public function scopeRangoFechas($query,$from,$to){
        if (is_null($from) || is_null($to)) { return $query; }else{ return $query->whereBetween('fecha', [$from, $to]); }
    }

    public function scopeCodigo($query,$codigo){
        if (is_null($codigo)) { return $query; }else{ return $query->where('codigo','LIKE','%'.$codigo.'%'); }
    }

    public function scopeHostname($query,$hostname){
        if (is_null($hostname)) { return $query; }else{ return $query->where('hostname','LIKE','%'.$hostname.'%'); }
    }
}
