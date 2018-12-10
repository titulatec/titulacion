<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filtrou extends Model
{
    protected $primaryKey='id';
   
   	public $timestamps=false;

    protected $fillable = [
        'id_fecha','id_alumno','fecha','const_ini_ter','cred_cult','cred_dep','cred_tut','cred_congr','cred_otr'
   ];
   protected $guarded =[

    ];

}
