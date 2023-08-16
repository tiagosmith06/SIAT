<x-app-layout>
    @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Biblioteca de Gestiones</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">Cargar Gestión</a>

    <div class="mt-3">
        <form action="{{ route('pages.gestiondocumental') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar gestión..." name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </div>
            </div>
        </form>
    </div>

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
            @foreach ($gestiones as $gestion)
            <tr>
                <td>{{ $gestion->titulo }}</td>
                <td>{{ $gestion->autor }}</td>
                <td>{{ $gestion->fecha }}</td>
                <td>
                    <a href="{{ route('pages.show', $gestion) }}" class="btn btn-info btn-sm">Consultar</a>
                    <a href="{{ $gestion->enlace_descarga }}" class="btn btn-success btn-sm" target="_blank">Descargar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</x-app-layout>

