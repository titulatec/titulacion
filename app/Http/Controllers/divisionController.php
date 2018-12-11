<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Fecha;
use App\fechas_solicitudes;
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
    public function inicio()
    {
        $fechas = fechas_solicitudes::orderBy('fecha', 'ASC')->get();
        return view('divestudios.index',compact('fechas'));

    }
    public function store(Request $request)
    {
        
        fechas_solicitudes::create($request->all());

        return back();  
    }

    public function destroy(Request $request)
    {
        
        $fechas = fechas_solicitudes::findOrFail($request->fechaid);
        $fechas->delete();

        return back();

    }
    /*
    *Aqui empieza el estatus de solicitudes
    */
    public function status()
    {

        return view('divestudios.status');

    }
    public function pendientes()
    {
        $foraneo = Alumno::All()->where('registrado', "=",'N');
        return view('divestudios.pendientes',compact('foraneo'));

    }
    public function enviadas()
    {
        
        $fechas = fechas_solicitudes::orderBy('fecha', 'ASC')->get();
         return view('divestudios.enviadas.index',compact('fechas'));

    }

    //terminar estatus de solicitudes


    public function fora(Request $request)
    {
        $foraneo = Alumno::select('*')
            ->join('fechas_solicitudes', 'alumnos.fecha', '=', 'fechas_solicitudes.fecha')
            ->where('alumnos.fecha', $request->fecha)
            ->get();

            //return view('divestudios.fora');
        $alumnos = Alumno::All();
            //$foraneo = Alumno::All()->where('registrado', "=",'N');
        return view('divestudios.fora', compact('foraneo','alumnos'));

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
    public function ver_alumno($id)
    {
        $alumno = Alumno::where('id', $id)
                        ->first();
        return view('divestudios.ver_alumno',compact('alumno','id'));
    }


    public function update(Request $request)
    {
        //dd($request->all());

        $alumno= Alumno::findOrFail($request->alumno_id);

        $alumno->update($request->all());
       
        return back();
    }
    /*
    public function update(Request $request, $id)
    {
        $plan_estudios = $request->input('plan_estud');

        $alumno = Alumno::find($id);

        $alumno->plan_estud = $plan_estudios;
        $alumno->save();

        return redirect('/div_estudios/fora')->with('success', 'New support ticket has been updated!!');
    }*/
    public function aprobar(Request $request, $id)
    {

        $alumno = Alumno::find($id);

        $alumno->registrado ="S";
        $alumno->save();

        return redirect('/div_estudios/fora/2018-12-03/2018-12-09')->with('success', 'New support ticket has been updated!!');
    }
    /*
    public function update(Request $request, $id)
    {
        $alumno = new Alumno();
        $data = $this->validate($request, [
            'nombre'=>'required',
            'carrera'=> 'required'
        ]);
        $data['id'] = $id;
        $alumno->updateAlumno($data);

        return redirect('/home')->with('success', 'New support ticket has been updated!!');
    }
    public function updateAlumno($data,$id)
    {
        $alumno = $this->find($id);
        $alumno->nombre = $data['nombre'];
        $alumno->carrera = $data['carrera'];
        $alumno->save();
        return 1;
    }*/
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
        $foraneo = Alumno::All()->where('registrado', "=",'S');
        return view('divestudios.div_formulario',compact('foraneo'));
    }
/*
    public function destroy($id)
    {
        $fecha = Fecha::findOrFail($id);
        $fecha->update();
        return Redirect::to('divestudios/div_estudios');
    }*/

}
