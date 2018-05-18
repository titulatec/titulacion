<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Laracasts\Flash\Flash;
use Excel;
use Storage;

class AcadControler extends Controller
{
    public $restful=true;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
 
     $tipo = Auth::user()->rol;
        //$tipo='alumno';
        if ($tipo=='jefe'){

        //$productoT = producto2010::all();
        //return view('alumno',compact('productoT'));

        return view ('academico.deptoacad');
        }
        else{
            return view ('errores.errorpag');

        }
    
    }

    public function proyectos()
    {
        return view('academico.proyectos');  //visualizar proyectos
    }

    public function profesores()
    {
        return view('academico.profesores');  //visualizar proyectos
    }


   /* public function agregar_asesores()
    {
        Asesor::update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'rol'=>$data['rol']
        ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");
        return back();
    }
    */



}
