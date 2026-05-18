@extends('layouts.app')

@section('title', $titulo)

@section('content')
    <h1>{{ $titulo }}</h1>

    <p>{{ $mensaje }}</p>

    <div class="card">
        <h2>¿Qué estamos practicando?</h2>

        <p>
            Estamos trabajando con rutas, controladores, vistas Blade
            y organización inicial de un proyecto Laravel.
        </p>
    </div>
@endsection