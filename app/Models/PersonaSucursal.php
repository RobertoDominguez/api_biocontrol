<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaSucursal extends Model
{
    use HasFactory;

    protected $table="PersonaSucursal";

    protected $fillable=[
        'id_sucursal',
        'id_persona'
    ];
}
