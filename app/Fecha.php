<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $primaryKey='id';

    protected $fillable = [
        'fecha', 'hora', 'lugar', 'carrera', 'espacios_disponibles'
   ];
   protected $guarded =[

    ];
}
