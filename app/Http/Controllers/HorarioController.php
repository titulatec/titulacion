<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Producto;
use App\Proyecto;
use App\Solicitud;
use App\Http\Controllers\Controller;
use DB;
use ConsultasAlumno;
use Laracasts\Flash\Flash;

class HorarioController extends Controller
{
    public $restful=true;

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_division');
    }
    public function index(){

    return view ('alumno.nav_alum');
    
    }
}
