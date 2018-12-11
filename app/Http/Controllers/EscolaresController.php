<?php

namespace App\Http\Controllers;

use App\filtrou;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class EscolaresController extends Controller
{
    public $restful = true;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_escolares');
    }
    public function index()
    {

        return view('servescolares.serv_escolares');

    }
    public function carreras()
    {

        return view('servescolares.carreras');

    }
    public function industrial()
    {

        return view('servescolares.industrial.index');

    }
    /*
    * Carrera Industrial
    */
    public function checklist()
    {

        return view('servescolares.checklist');

    }
    public function form()
    {

        return view('servescolares.form');

    }
}
