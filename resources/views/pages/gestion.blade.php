<!-- ... -->
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Agregar enlaces para acceder a las vistas -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cargar-archivo') }}">Cargar Archivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('lista-documentos') }}">Lista de Documentos</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <!-- ... -->
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- ... -->
