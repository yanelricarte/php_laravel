@extends('layouts.app')

@section('title', $titulo)

@section('content')
    <h1>{{ $titulo }}</h1>
    <p>{{ $mensaje }}</p>
    <ul>
        @foreach ($materias as $materia)
            <li>{{ $materia }}</li>
        @endforeach
    </ul>
@endsection