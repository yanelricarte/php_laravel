@extends('layouts.app')

@section('title', $titulo)

@section('content')
    <h1>{{ $titulo }}</h1>

    <p>Información general del proyecto:</p>

    @foreach ($datos as $dato)
        <div class="card">
            {{ $dato }}
        </div>
    @endforeach
@endsection