<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $fillable = [
        'no_control','asesor','revisor1','revisor2','producto','carrera',
    ];
}
