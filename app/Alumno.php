<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
	protected $fillable = [
        'no_control', 'nombre', 'apellido_p', 'apellido_m', 'carrera', 'telefono', 'mail','tipo','plan_estud',,'opcion_titulacion','producto','registrado'
   ];

}
