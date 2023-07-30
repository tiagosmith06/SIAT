<!-- resources/views/documentos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Agregar nuevo documento</h1>
        <form action="{{ route('documentos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-input w-full">
            </div>
            <div class="mb-4">
                <label for="archivo" class="block text-sm font-medium">Archivo:</label>
                <input type="file" name="archivo" id="archivo" class="form-input w-full">
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-textarea w-full"></textarea>
            </div>
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-input w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Guardar
                </button>
            </div>
        </form>
    </div>
@endsection
