<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Alumno;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class jesusController extends Controller
{
    //
     public function index()
    {
        $products = Alumno::all();

        return view('layouts.jesus', compact('products'));
    }

    public function pdf()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/
       /** $products = Alumno::all(); 

        $pdf = PDF::loadView('pdf.products', compact('products'));

        return $pdf->download('listado.pdf'); **/
    }
}
}
