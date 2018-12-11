<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fechas_solicitudes extends Model
{
   protected $primaryKey='id';
   
   public $timestamps=false;

    protected $fillable = [
        'descripcion','fecha','fecha_fin','status'
   ];
   protected $guarded =[

    ];

}
