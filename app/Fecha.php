<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = [
        'fecha', 'hora', 'lugar', 'carrera', 'espacios_disponibles'
   ];
}
