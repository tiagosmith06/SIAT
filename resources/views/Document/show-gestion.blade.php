<!-- resources/views/documentos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">{{ $documento->nombre }}</h1>
        <p><strong>Archivo:</strong> {{ $documento->archivo }}</p>
        <p><strong>Descripción:</strong> {{ $documento->descripcion }}</p>
        <p><strong>Fecha:</strong> {{ $documento->fecha }}</p>
        <p class="mt-4">
            <a href="{{ route('documentos.download', $documento->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded">
                Descargar
            </a>
        </p>
    </div>
@endsection
