@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Gestión</h1>
    <h2>{{ $gestion->titulo }}</h2>
    <p><strong>Autor:</strong> {{ $gestion->autor }}</p>
    <p><strong>Fecha:</strong> {{ $gestion->fecha }}</p>
    <p><strong>Descripción:</strong> {{ $gestion->descripcion }}</p>
    <a href="{{ $gestion->enlace_descarga }}" class="btn btn-success">Descargar</a>
    <a href="{{ route('pages.gestiondocumental') }}" class="btn btn-secondary">Volver a la lista</a>
</div>
@endsection
