<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Laracasts\Flash\Flash;
use Excel;
use Storage;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $tipo = Auth::user()->rol;

    }

    public function verificar_rol()
    {
        $tipo = Auth::user()->rol;
        if ($tipo=='admin'){
        return True;
        }
        else{
            return False;

        }
    }
    ///

    /*public function index(){
 
 	 $tipo = Auth::user()->rol;
        if ($tipo=='admin'){
            return view ('admin.home');
        }
        else{
            return view ('errores.errorpag');
        }
	}*/
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

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");
        return back();


    }


    public function cargar_datos_usuarios(Request $request)
    {
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
            $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
                
                $hoja->each(function($fila) {
                    $usersemails=User::where("email","=",$fila->email)->first();
                    if(count( $usersemails)==0){
                        $usuario=new User;
                        $usuario->no_control= $fila->no_control;
                        $usuario->name= $fila->name;
                        $usuario->email= $fila->email;
                        $usuario->rol= $fila->rol; 
                        $usuario->password= bcrypt($fila->password);
                        $usuario->save();
                    }
             
                });

            });

            Flash::success("Se ha registrado de forma exitosa");
            return back();
        
       }
       else
       {
            Flash::error("Se ha registrado un error");
            return back();
       }

    }

}
