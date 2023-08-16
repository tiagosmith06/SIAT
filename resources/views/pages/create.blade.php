@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cargar Nueva Gestión</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="enlace_descarga">Enlace de Descarga</label>
            <input type="text" class="form-control" id="enlace_descarga" name="enlace_descarga" required>
        </div>
        <button type="submit" class="btn btn-primary">Cargar</button>
        <a href="{{ route('pages.gestiondocumental') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
