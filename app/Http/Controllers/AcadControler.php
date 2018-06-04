<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use App\Proyecto;
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

    public function reg_residencia (Request $data){
        Proyecto::create([
            'no_control' => $data['full_nc'],
            'nombre_proyecto' => $data['full_nombreproyecto'],
            'asesor' => $data['full_asesor'],
            'revisor1' => $data['full_revisor1'],
            'revisor2' => $data['full_revisor2'],
            'optitulacion' => $data['full_optitulacion'],
            'producto' => $data['full_producto'],
            'status' => $data['full_status']

        ]);

        Flash::success("Se ha registrado ".$data['nombre_proyecto']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
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
