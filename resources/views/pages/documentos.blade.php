@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos</h1>
    <a href="{{ route('documentos.create') }}" class="btn btn-primary">Agregar Documento</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documentos as $documento)
            <tr>
                <td>{{ $documento->titulo }}</td>
                <td>{{ $documento->autor }}</td>
                <td>{{ $documento->fecha }}</td>
                <td>
                    <a href="{{ route('documentos.show', $documento) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('documentos.edit', $documento) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('documentos.destroy', $documento) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este documento?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
