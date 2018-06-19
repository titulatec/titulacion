<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use Barryvdh\DomPDF\Facade as PDF;


class AlmaController extends Controller
{
    public function index()
    {
        $products = Alumno::all();

        return view('layouts.alma', compact('products'));
    }

    public function pdf()
    {        
        
        $products = Alumno::all(); 

        $pdf = PDF::loadView('layouts.pdf', compact('products'));

        return $pdf->download('listado.pdf');
    }
}