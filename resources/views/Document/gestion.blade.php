<!-- resources/views/documentos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Lista de documentos</h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Archivo</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Fecha</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documentos as $documento)
                    <tr>
                        <td class="border px-4 py-2">{{ $documento->nombre }}</td>
                        <td class="border px-4 py-2">{{ $documento->archivo }}</td>
                        <td class="border px-4 py-2">{{ $documento->descripcion }}</td>
                        <td class="border px-4 py-2">{{ $documento->fecha }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('documentos.show', $documento->id) }}" class="text-blue-500 hover:text-blue-600">Ver</a>
                            <a href="{{ route('documentos.download', $documento->id) }}" class="text-green-500 hover:text-green-600 ml-2">Descargar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
