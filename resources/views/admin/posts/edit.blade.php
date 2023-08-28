@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="flex justify-between items-center">
    <h1 class="text-2xl">Editar artículo</h1>
</div>
@stop

@section('content')

@if (session('info'))
<div class="bg-green-200 text-green-800 border-l-4 border-green-500 py-2 px-4 mb-4">
    <strong>{{ session('info') }}</strong>
</div>
@endif

<div class="bg-white shadow-md rounded-lg p-4">
    {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="mb-4">
        {!! Form::label('name', 'Nombre', ['class' => 'block text-sm font-medium text-gray-700']) !!}
        {!! Form::text('name', $post->name, ['placeholder' => 'Ingrese nombre', 'class' => 'mt-1 p-2 w-full border rounded-md']) !!}
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('slug', 'Slug', ['class' => 'block text-sm font-medium text-gray-700']) !!}
        {!! Form::text('slug', null, ['placeholder' => 'Ingrese nombre', 'class' => 'mt-1 p-2 w-full border rounded-md bg-gray-100', 'readonly']) !!}
        @error('slug')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    {!! Form::hidden('category_id', 1) !!}

    <div class="mb-4">
        <div class="font-semibold">Etiquetas</div>
        @foreach ($tags as $tag)
        <label class="inline-flex items-center">
            {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'form-checkbox text-indigo-600']) !!}
            <span class="ml-2">{{ $tag->name }}</span>
        </label>
        @endforeach
        @error('tags')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <div class="font-semibold">Estado</div>
        <label class="inline-flex items-center">
            {!! Form::radio('status', 1, true, ['class' => 'form-radio text-green-600']) !!}
            <span class="ml-2">Borrador</span>
        </label>

        <label class="inline-flex items-center">
            {!! Form::radio('status', 2, false, ['class' => 'form-radio text-green-600']) !!}
            <span class="ml-2">Público</span>
        </label>
        @error('status')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="img-wrapper">
                @if ($post->image)
                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}">
                @else
                <img src="" alt="No tiene imagen">
                @endif
            </div>
            <div>
                {!! Form::label('file', 'Cargue una imagen en cualquier formato', ['class' => 'block text-sm font-medium text-gray-700']) !!}
                {!! Form::file('file', ['class' => 'mt-1 p-2 w-full border rounded-md']) !!}
                @error('file')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-4">
        {!! Form::label('extract', 'Extracto', ['class' => 'block text-sm font-medium text-gray-700']) !!}
        {!! Form::textarea('extract', null, ['class' => 'mt-1 p-2 w-full border rounded-md']) !!}
        @error('extract')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        {!! Form::label('body', 'Cuerpo', ['class' => 'block text-sm font-medium text-gray-700']) !!}
        {!! Form::textarea('body', null, ['class' => 'mt-1 p-2 w-full border rounded-md']) !!}
        @error('body')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        @if ($post->archivo)
        <a target="_blank" href="{{ Storage::url($post->archivo->url) }}">Ver archivo</a>
        @else
        <span>No tiene archivo</span>
        @endif

        <div>
            {!! Form::label('file2', 'Archivo (Opcional)', ['class' => 'block text-sm font-medium text-gray-700']) !!}
            {!! Form::file('file2', ['class' => 'mt-1 p-2 w-full border rounded-md', 'accept' => 'application/pdf,.docx,.pptx,.xlsx']) !!}
            @error('file2')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    {!! Form::submit('Editar artículo', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@stop

@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
@endpush

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
<script>
    document.getElementById('file').addEventListener('change', cambiarImagen)

    function cambiarImagen(e) {

        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = (e) => {
            document.getElementById('picture').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(file);

    }
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
</script>
@stop

@section('css')
<style>
    .img-wrapper {
        position: relative;
    }

    .img-wrapper img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop

