<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

   /* public function agregar_foraneo (Request $data){
        Proyecto::create([
            'no_control' => $data[''],
            'nombre_proyecto' => $data['id'],
            'password' => bcrypt($data['password']),
            'rol'=>$data['rol']
        ]);

        Flash::success("Se ha registrado ".$data['name']." de forma exitosa");
        return back();
                                                                                                                                                                                                 
    }*/

    }


