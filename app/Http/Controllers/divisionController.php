<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('divestudios.fora');
    }

    public function div_create()
    {
        return view('divestudios.div_create');
    }

   public function agregar_foraneo (Request $data){
        Alumno::create([
            'no_control' => $data['full_nc'],
            'nombre' => $data['full_name'],
            'apellido_p' => $data['full_apellido_p'],
            'apellido_m' => $data['full_apellido_m'],
            'carrera' => $data['full_carrera'],
            'telefono' => $data['full_tel'],
            'mail' => $data['full_email'],
            'optitulacion' => $data['full_optitulacion'],
            'producto' => $data['full_producto'],
            'tipo' => $data['full_tipo'],
            'status' => $data['full_email'],
            'registrado' => 'N',

        ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
    }

    public function div_interno()
    {
        return view('divestudios.div_interno');
    }

    }


