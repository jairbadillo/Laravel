@extends('layouts.plantilla')
@section('title','Cursos '. $curso)

@section('content')
    {{-- Con PHP --}}
    {{-- <h1>Curso hecho con el framework <?php //echo $curso; ?></h1> --}}

    {{-- Con Blade --}}
    <h1>Curso hecho con el framework {{$curso}} </h1>
@endsection