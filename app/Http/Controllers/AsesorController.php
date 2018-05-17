<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Laracasts\Flash\Flash;
use Storage;

class AsesorController extends Controller
{
     public $restful=true;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 
     $tipo = Auth::user()->rol;
        if ($tipo=='profesor'){

        //$productoT = producto2010::all();
        //return view('alumno',compact('productoT'));

        return view ('academico.asesor');
        }
        else{
            return view ('errores.errorpag');

        }
    
    }


}
