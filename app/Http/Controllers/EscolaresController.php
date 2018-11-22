<?php

namespace App\Http\Controllers;

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
    public function checklist()
    {

        return view('servescolares.checklist');

    }
    public function form()
    {

        return view('servescolares.form');

    }
}
