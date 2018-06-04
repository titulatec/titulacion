<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;  //para excepción del catch (en el flash)
use App\User;
use App\Alumno;
use DB;
use Laracasts\Flash\Flash;
use Excel;
use Storage;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');

    }

    
    public function index(){
        return view ('admin.home');
    }

    public function agregar_personal(Request $data){

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'rol'=>$data['rol']
        ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa")->important();
        return back();


    }

    public function agregar_alumnos(Request $data){

        try {
        Alumno::create([
            'no_control' => $data['nocontrol'],
            'nombre' => $data['nombre'],
            'apellido_p' => $data['paterno'],
            'apellido_m' => $data['materno'],
            'carrera' => $data['carrera'],
            'telefono' => $data['telefono'],
            'mail' => $data['email'],
            'tipo' => $data['tipo'],
            'plan_estud' => $data['plan'],
            'registrado' => 'N'
        ]);

        Flash::success("Se ha registrado ".$data['nombre']." de forma exitosa")->important();
        

        } catch (\Illuminate\Database\QueryException $e) {
                
            Flash::error("Se ha presentado un error con las datos favor de verificarlos ");
        }

        return back();


    }

}
