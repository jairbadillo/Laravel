<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function aplicacion($curso){
        return view('cursos.cursos', ['curso' => $curso]);
    }

    public function crearcurso(){
        return view('cursos.crearcurso');
    }

    public function cantidad($cantidad){
        // compact('cantidad') es lo mismo que ['cantidad' => $cantidad]; conserva el mismo nombre en el array.
        return view('cursos.cantidad', compact('cantidad'));
        // return view('cursos.cantidad', ['cantidad' => $cantidad]);
    }
}
