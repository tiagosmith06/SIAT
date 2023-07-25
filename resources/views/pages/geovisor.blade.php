<x-app-layout>

    <div class="w-full">

        <div class="imagen-title" style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">GEOVISOR
                </h1>
                <!--<h1 class="text-my_blue text-xl">GEOVISOR</h1> -->
                <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2 text-my_green">
                            <i class="fa-solid fa-house text-my_green"></i>

                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href="/"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                Inicio /
                            </a>
                        </li>

                        <li class="inline-flex items-center">

                            <a href="/nuestros-planes"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                Geovisor
                            </a>
                        </li>

                    </ol>
                </nav>
            </div>
        </div>



    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <!-- Importa Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <div class="flex items-center justify-center h-screen">
        <div id="map" class="w-96 h-96"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([5.5711, -76.6275], 12);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Crea un marcador y un popup asociado a él con detalles
        var marker = L.marker([5.5711, -76.6275])
            .addTo(map)
            .bindPopup('<b>Laboratorio de datos</b><br> IIAP.');

        // Función para mostrar detalles del lugar en el popup cuando hacemos clic en el marcador
        function onMarkerClick(e) {
            e.target.openPopup();
        }

        // Agregamos el evento de clic al marcador para mostrar el popup con detalles del lugar
        marker.on('click', onMarkerClick);
    </script>

        <div class=" py-8  mx-7 max max-w-8xl ">
            <div class=" max-w-3xl">

            </div>
            <div class="justify-center flex flex-col md:flex-row items-center">



                <div>

                </div>
                <div class="flex flex-col w-full  md:w-[30%] justify-center">


                  <!-- <div class="w-full flex justify-center flex-col items-center ">
                        <img class="w-full object-cover max-w-[250px]" src="{{asset('images/logo.jpeg') }}" alt="foto">
                        <img class="w-full object-cover max-w-[250px]" src="{{asset('images/contratacion.png') }}"
                            alt="foto">
                    </div>  -->
              
                    <div class="w-full  flex   flex-col justify-center items-center">

                        @foreach ($posts as $post)

                        <a href={{route('pages.show-contratacion', ['post'=>$post])}} class="text-sm">
                            {{$post->name}}</a>

                        @endforeach

                    </div>


                </div>
            </div>

        </div>





    </div>

</x-app-layout>
