<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Solicitud;
use App\Alumno;
use Laracasts\Flash\Flash;

class divisionController extends Controller
{
    
    public $restful=true;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_division');
    }

    public function index(){


        return view ('divestudios.div_estudios');
    
    }

    public function fora()
    {
        //return view('divestudios.fora');
        $foraneo = Alumno::all();
        return view('divestudios.fora', compact('foraneo'));      

    }

    public function div_create()
    {
        return view('divestudios.div_create');
    }

   public function agregar_foraneo (Request $data){
        try {
        Alumno::create([
            'no_control' => $data['full_nc'],
            'nombre' => $data['full_name'],
            'apellido_p' => $data['full_apellido_p'],
            'apellido_m' => $data['full_apellido_m'],
            'carrera' => $data['carrera'],
            'telefono' => $data['full_tel'],
            'mail' => $data['full_email'],
            'plan_estud' => $data['full_planest'],
            'opcion_titulacion' => $data['opcion'],
            'producto' => $data['full_producto'],
            'tipo' => 'Foraneo',
            //'status' => $,
            'registrado' => 'N',

        ]);

        //Solicitud::create([
          //  'no_control' => $data['full_nc'],
            //'nombre' => $data['full_name'],
            //'apellido_p' => $data['full_apellido_p'],
            //'apellido_m' => $data['full_apellido_m'],
            //'carrera' => $data['carrera'],
            //'telefono' => $data['full_tel'],
            //'mail' => $data['full_email'],
            //'plan_estud' => $data['full_planest'],
            //'opcion_titulacion' => $data['opcion'],
            //'producto' => $data['full_producto'],
            //'tipo' => 'Foraneo',
            //'status' => $,
            //'registrado' => 'N',

       // ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");


    } catch (\Illuminate\Database\QueryException $e) {
                
            Flash::error("Se ha presentado un error con las datos favor de verificarlos ");
        }

        return back();
                                                                                                                                                                                                 
    }

    public function div_interno()
    {
        return view('divestudios.div_interno');
    }

    public function div_edit()
    {
        return view('divestudios.div_edit');
    }


    }

   
    

