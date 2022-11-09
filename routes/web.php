<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TipoCursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Antes
// Route::get('/', function () {
//     return view('welcome');
// });

//Despues
Route::get('/', HomeController::class);

//Antes
// Route::get('curso/{app}', function ($app) {
//     return "Aplicación hecha con $app";
// });

// Route::get('curso/cantidad/{cantidad}', function ($cantidad) {
//     return "Cantidad de aplicaciónes: $cantidad";
// });

//Despues
Route::get('curso/{curso}', [CursoController::class, 'aplicacion']);
Route::get('cursocrear/', [CursoController::class, 'crearcurso']);
Route::get('curso/cantidad/{cantidad}', [CursoController::class, 'cantidad']);

//Despues laravel 9
// Route::controller(CursoController::class)->group(function(){
//     Route::get('curso/{app}', 'aplicacion');
//     Route::get('curso/cantidad/{cantidad}', 'cantidad');
// });

//antes
// Route::get('tipocurso/{framework}/{lenguaje?}', function ($framework, $lenguaje = null) {
//     if ($framework && $lenguaje) {
//         return "El curso asigando tiene el framework: $framework y el lenguaje: $lenguaje";        
//     } else {
//         return "El curso solo es del framework: $framework";
//     }
// });

//Despues
Route::get('tipocurso/{framework}/{lenguaje?}', [TipoCursoController::class, 'tipoCurso']);