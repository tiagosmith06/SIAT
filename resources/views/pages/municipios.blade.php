<!-- resources/views/municipios/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Municipios del Chocó, Colombia</title>
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Municipios del Chocó, Colombia</h1>
        <form class="mb-4">
            <div class="flex">
                <input type="text" name="search" placeholder="Buscar municipio" class="border px-4 py-2 mr-2">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
            </div>
        </form>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Departamento</th>
                    <th class="px-4 py-2">Área (km²)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <td class="border px-4 py-2">{{ $municipio->nombre }}</td>
                    <td class="border px-4 py-2">{{ $municipio->departamento }}</td>
                    <td class="border px-4 py-2">{{ $municipio->area }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

