<?php

namespace App\Http\Controllers;

use App\Fecha;
use App\Http\Controllers\Controller;
use App\Solicitud;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class AlumnoController extends Controller
{

    public $restful = true;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_alum');
    }

    public function index()
    {
        return view('alumno.index');
    }
    public function proceso()
    {
        // $productos = Producto::all();
        $alumno    = DB::table('alumnos')->where('mail', Auth::user()->email)->get()->first();
        $solicitud = Solicitud::where('no_control', '=', $alumno->no_control)->get()->first();
        if ($solicitud != null) {

            $estado = 'disabled';

            //
        } else {

            $estado = 'enabled';

        }
        return view('alumno.alumno', compact('estado', 'alumno', 'solicitud'));

    }

    public function veralumnos()
    {
        //$alumnos = DB::table('alumnos')->get();
        //$alumnos = ConsultasAlumno::all_alumnos();
        //foreach ($alumnos as $user)
        //{
        //    echo $user->nombre;
        //}

        $user   = DB::table('alumnos')->where('no_control', '14590572')->get()->first();
        $nombre = $user->nombre;
        echo $user->nombre;
        echo $nombre;
        // echo $user[3][0];
        // echo $user["nombre"];
    }

    public function registrar_proyecto(Request $data)
    {
        Solicitud::create([
            'no_control'      => $data['nocontrol'],
            'nombre_proyecto' => $data['nombre_proyecto'],
            'optitulacion'    => $data['opcion'],
            'producto'        => $data['producto'],
            'tipo'            => $data['tipo'],
            'status'          => 'Enviado',
            'mensaje'         => 'Revise la plataforma en 5 dias para ver asesor y revisores',
        ]);

        Flash::success("Se ha registrado el proyecto: " . $data['nombre_proyecto'] . " de forma exitosa");
        return back();

    }
    public function ver_fechas()
    {
        $alumno = DB::table('alumnos')->where('mail', Auth::user()->email)->get()->first();
        $fecha  = Fecha::where('carrera', '=', $alumno->carrera)->get();
       // if ($solicitud != null) {

         //   $estado = 'disabled';

            //
        //} else {

          //  $estado = 'enabled';

        //}
        return view('alumno.ver_fechas', compact('fecha'));

    }
    public function registrar_hora(Request $data)
    {
        fecha_elegida::create([
            'no_control' => $data['nocontrol'],
        ]);

        Flash::success("Se ha registrado su horario de forma exitosa");
        return back();

    }
}
