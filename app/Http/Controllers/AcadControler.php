<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Solicitud;
use App\Profesor;
use App\Alumno;
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
        $solicitud = Solicitud::all();
        $profesor = Profesor::all();
        //$profesor = Profesor::where('nombre_proyecto','=',$solicitud->nombre_proyecto);
        //$alumno = Alumno::where('no_control','=',$solicitud->no_control);

       // $alumno = DB::table('alumnos')->where('mail', Auth::user()->email )->get()->first();
        //$solicitud = Solicitud::where ('no_control','=',$alumno->no_control)->get()->first();

        //return view ('academico.deptoacad', compact('solicitud', 'asesores'));

        $consulta = Solicitud::join("alumnos","solicituds.no_control","=","alumnos.no_control")
        //->where('nombre_profe','=',)
        ->get();

        return view ('academico.deptoacad', compact('solicitud', 'profesor', 'consulta'));

    }

    public function reg_residencia(Request $data){
        Solicitud::create([
            'no_control' => $data['no_control'],
            'nombre_proyecto' => $data['nombre_proyecto'],
            'asesor' => $data['asesor'],
            'revisor1' => $data['revisor1'],
            'revisor2' => $data['revisor2'],
            'optitulacion' => $data['optitulacion'],
            'producto' => $data['producto'],
            //'tipo'=> null,
            'status' => $data['status'],
            //'mensaje' => null

        ]);

        Flash::success("Se ha registrado ".$data['nombre_proyecto']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
    }

    public function update_asesores(Request $request, $id){
            $solicitud= Solicitud::find($id);
            $solicitud->asesor = $request->input('asesor');
            $solicitud->revisor1 = $request->input('revisor1');
            $solicitud->revisor2 = $request->input('revisor2');
            $solicitud->save();

            Flash::success("Se han registrado asesores correctamente");

            return redirect()->route('academico.index');


        Flash::success("Se ha registrado ".$data['nombre_proyecto']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
    }
    
    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $profesor = Profesor::find($id);
        return \View::make('update',compact('profesor'));
    }




}
