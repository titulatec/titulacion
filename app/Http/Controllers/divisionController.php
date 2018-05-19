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

}

