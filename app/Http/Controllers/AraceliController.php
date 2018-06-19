<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Barryvdh\DomPDF\Facade as PDF;


class AraceliController extends Controller
{
    public function index()
    {
        $products = Alumno::all();

        return view('layouts.araceli', compact('products'));
    }

    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
        $products = Alumno::all(); 

        $pdf = PDF::loadView('layouts.pdf', compact('products'));

        return $pdf->download('alumnos.pdf');
    }
}
