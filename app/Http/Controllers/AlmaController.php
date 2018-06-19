<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Barryvdh\DomPDF\Facade as PDF;


class AlmaController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();

        return view('layouts.alma', compact('alumnos'));
    }

    /*public function pdf()
    {        
        
        $alumnos = Alumno::all(); 

        $pdf = PDF::loadView('pdf.alumnos', compact('alumnos'));

        return $pdf->download('listado.pdf');
    }*/
}