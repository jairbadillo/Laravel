@extends('layouts.plantilla')
@section('title','Cantidad de cursos '.$cantidad)

@section('content')
    {{-- Con PHP --}}
    {{-- <h1>Cantidad de cursos: <?php //echo $cantidad; ?></h1> --}}

    {{-- Con Blade --}}
    <h1>Cantidad de cursos: {{$cantidad}}</h1>
@endsection