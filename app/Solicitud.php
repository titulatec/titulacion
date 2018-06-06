<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
 	protected $fillable = [
    'no_control','nombre_proyecto','asesor','revisor1','revisor2','optitulacion','producto','tipo','status','mensaje'];
}
