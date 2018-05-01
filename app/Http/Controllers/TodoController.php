<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        try{
        $rol = Auth::user()->rol;
    	}
    	catch(Exception $e){
    		return view('index');
    	}

    	if ($rol=='Alumno'){
    		return '/alumno';
    	}

	}
}
