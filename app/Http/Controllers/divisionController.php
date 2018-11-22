<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Fecha;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class divisionController extends Controller
{

    public $restful = true;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_division');
    }

    public function index()
    {

        return view('divestudios.div_estudios');

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

    public function agregar_foraneo(Request $data)
    {
        try {
            Alumno::create([
                'no_control'        => $data['full_nc'],
                'nombre'            => $data['full_name'],
                'apellido_p'        => $data['full_apellido_p'],
                'apellido_m'        => $data['full_apellido_m'],
                'carrera'           => $data['carrera'],
                'telefono'          => $data['full_tel'],
                'mail'              => $data['full_email'],
                'plan_estud'        => $data['full_planest'],
                'opcion_titulacion' => $data['opcion'],
                'producto'          => $data['full_producto'],
                'tipo'              => 'Foraneo',
                //'status' => $,
                'registrado'        => 'N',

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

            Flash::success("Se ha registrado " . $data['name'] . " de forma exitosa");

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
    public function hora_isctics()
    {
        $fecha = Fecha::all();
        return view('divestudios.hora_isctics', compact('fecha'));
    }
    public function fecha_create()
    {
        return view('divestudios.fecha_create');
    }
    public function registra_fecha(Request $data)
    {
        try {
            Fecha::create([
                'fecha'                => $data['full_date'],
                'hora'                 => $data['full_time'],
                'lugar'                => $data['full_luga'],
                'carrera'              => $data['full_carre'],
                'espacios_disponibles' => $data['full_espa_di'],
            ]);

            Flash::success("Se ha registrado de forma exitosa");

        } catch (\Illuminate\Database\QueryException $e) {

            Flash::error("Se ha presentado un error con las datos favor de verificarlos4 ");
        }

        return back();

    }
    public function fecha_alum()
    {
        $fecha = Fecha::all(); 
        return view('divestudios.fecha_alum',compact('fecha'));
    }
    public function all_alumnos()
    {
        return view('divestudios.all_alumnos');
    }
    public function div_formulario()
    {
        $foraneo = Alumno::all();
        return view('divestudios.div_formulario',compact('foraneo'));
    }

    public function destroy($id)
    {
        $fecha = Fecha::findOrFail($id);
        $fecha->update();
        return Redirect::to('divestudios/div_estudios');
    }
}
