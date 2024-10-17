<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $table="asistencia";

    protected $fillable=[
        'codigo',
        'dia',
        'fecha',
        'ingreso_programado',
        'salida_programado',
        'min_programado',
        'ingreso_real',
        'salida_real',
        'min_trabajados',
        'min_aprobados',
        'nocturno',
        'min_extra_real',
        'feriado',
        'diff_salida',
        // 'min_retrasos',
        'min_retrasos_tolerancia',
        'min_abandono',
        'min_faltas',
        'observacion',
    ];

    public $timestamps=false;

    public function scopeRangoFechas($query,$from,$to){
        if (is_null($from) || is_null($to)) { return $query; }else{ return $query->whereBetween('fecha', [$from, $to]); }
    }
}
