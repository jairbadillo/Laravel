<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Cuando se crean modelos los relaciona con el mismo nombre de la tabla haciendo una convención. "Se le agregar una [S] al final del nombre en este caso Cursos."
class Curso extends Model
{
    use HasFactory;

    //Se aplica cuando la convención no apunta directamente al mismo nombre de la clase con la de la DB, en este caso se usa la tabla "users".
    // protected $table = "users";

}
