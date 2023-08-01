<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

    <title>{{ 'SIAT-PC' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.jpeg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    {{--
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{asset('js/app.js')}}">
        --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    </script>
    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.worker.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    flowbite.init({
      presets: {
        tailwind: true,
      },
    });
  });
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                my_red: "#BF0615",
                light_red: "#A6123A",
                my_blue:"#02aa5d",
                light_blue:"#00aff0",
                light_green:"#a0ca7d",
                 my_green:"#02aa5d",
                light_white:"#F2F2F2"              }
            }
          }
        }

    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')


    <!-- Styles -->
    @livewireStyles
    <style>
        hr {
            border: 1px solid #666;
            border-radius: 300px/10px;
            height: 0px;
            text-align: center;
        }

        .imagen-title {
            width: 100%;
            background-color: #bdbdbd;
            color: #094884;
            background-position: center right;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .imagen-title .cover {
            padding-top: 80px;
            padding-bottom: 80px;
            width: 100%;
            margin: auto;
            background: linear-gradient(to right, rgba(255, 255, 255, 1) 36%, rgba(255, 255, 255, .61) 61%, rgba(246, 246, 246, .17) 89%, rgba(255, 255, 255, 0) 100%);
        }

        .fa-house {
            color: #02aa5d;
        }

        .imagen-title2 {
            width: 100%;
            background-color: #bdbdbd;
            color: #094884;
            background-position: center right;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .imagen-title2 .cover {
            padding-top: 100px;
            padding-bottom: 100px;
            width: 100%;
            margin: auto;
        }


        .title-main {
            border-bottom: 5px solid #021E73;
            display: block;
            font-family: "roboto_condensedbold";
            font-size: 24px;
            line-height: 24px;
            padding-bottom: 5px;
            padding-top: 27px;
            text-transform: uppercase;
            width: 300px;
        }

        .post-detail a {
            color: #0645ad
        }
    </style>


    <script>
        window.addEventListener('unload', function(event) {
        document.cookie = encodeURIComponent('visited') + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
axios.get('{{ route("contador") }}')
.then(function(response) {
    document.cookie = encodeURIComponent('visited') + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

  console.log(response);

})
.catch(function(error) {
  console.log(error);
});
});
    </script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100 w-full">

        @livewire('navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('components/footer')

<!-- ... -->
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

<!-- ... -->

    </div>

    @stack('modals')
    @stack('scripts')

    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>


</html>
