<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Producto;
use App\Proyecto;
use App\Http\Controllers\Controller;
use DB;
use ConsultasAlumno;

class AlumnoController extends Controller
{	

	public $restful=true;

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_alum');
    }

    public function index(){
        $productos = Producto::all();
        return view ('alumno.alumno',compact('productos'));
        
	}

	public function veralumnos (){
		//$alumnos = DB::table('alumnos')->get();
		//$alumnos = ConsultasAlumno::all_alumnos();
		//foreach ($alumnos as $user)
		//{
		//    echo $user->nombre;
		//}

         $user = DB::table('alumnos')->where('no_control', '14590572')->get()->first();
         $nombre=$user->nombre;
         echo $user->nombre;
         echo $nombre;
        // echo $user[3][0]; 
        // echo $user["nombre"];                                                                                                                                                                                           
	}

    public function registrar_proyecto (Request $data){
        Proyecto::create([
            'no_control' => $data['name'],
            'nombre_proyecto' => $data['id'],
            'password' => bcrypt($data['password']),
            'rol'=>$data['rol']
        ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
    }

}
