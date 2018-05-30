<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
 	protected $fillable = [
    'optitualcion', 'producto', 'tipo','status',
}
