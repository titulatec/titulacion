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
        $this->middleware('is_jefe');  // var para control middleware
    }

    public function index(){
        return view ('academico.deptoacad');  //solo regresa la vista del depto
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
    public function buscar_asesores()
    {
        Asesor::get([
			'nombreProf' => $data['nombreProf']
        ]);
    }
    




}
