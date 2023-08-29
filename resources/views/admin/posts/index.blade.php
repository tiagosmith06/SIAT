@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="flex justify-between items-center">
    <h1 class="text-2xl text-center font-extrabold text-uppercase">Lista de artículos</h1>
    @can('admin.posts.create')
    <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Crear un artículo</a>
    @endcan
</div>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>
@endif

<div class="card">
    <div class="card-header">
        <form action="{{ route('admin.posts.index') }}" method="GET" class="flex">
            <input type="text" class="w-full px-2 py-1 border rounded-lg" value="{{ request('search') }}" name="search" placeholder="Buscar">
            <button class="btn btn-success ml-2">Buscar</button>
        </form>
    </div>

    @if ($posts->count() > 0)
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="px-4 py-2">{{ $post->id }}</td>
                <td class="px-4 py-2">{{ $post->name }}</td>
                <td class="px-4 py-2">
                    @can('admin.posts.edit')
                    <a class="btn btn-success btn-sm" href="{{ route('admin.posts.edit', $post) }}">Editar</a>
                    @endcan
                </td>
                <td class="px-4 py-2">
                    @can('admin.posts.destroy')
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="card-body">
        <h4 class="text-lg">No hay registros de ningún artículo</h4>
    </div>
    @endif
</div>

<div class="card-footer">
    {{ $posts->links() }}
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop

