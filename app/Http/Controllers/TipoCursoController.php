<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoCursoController extends Controller
{
    public function tipoCurso($framework, $lenguaje){
        if ($framework && $lenguaje) {
            return view('welcome');
            return "El curso asigando tiene el framework: $framework y el lenguaje: $lenguaje";        
        } else {
            return view('welcome');
            return "El curso solo es del framework: $framework";
        }
    }
}
