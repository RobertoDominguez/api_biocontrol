<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichadaExtendida extends Model
{
    use HasFactory;

    protected $primaryKey ='id_fichada';
    protected $table="FichadaExtendida";

    protected $fillable=[
        'id_fichada',
        'foto',
        'foto2',
        'foto3'
    ];

    public $timestamps=false;

}
