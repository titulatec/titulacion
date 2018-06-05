<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
 	protected $fillable = [
    'no_control','optitualcion', 'producto', 'tipo','status'
}
