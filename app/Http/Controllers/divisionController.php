<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class divisionController extends Controller
{
    
    public $restful=true;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 
     $tipo = Auth::user()->rol;
        //$tipo='alumno';
        if ($tipo=='div'){

        //$productoT = producto2010::all();
        //return view('alumno',compact('productoT'));

        return view ('divestudios.div_estudios');
        }
        else{
            return view ('errores.errorpag');

        }
    
       //return view ('alumno.alumno');
    }



}

