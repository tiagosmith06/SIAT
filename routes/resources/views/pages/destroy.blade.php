@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success">
        <p><strong>¡Éxito!</strong> La gestión se ha eliminado correctamente.</p>
    </div>
    <a href="{{ route('pages.gestiondocumental') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
