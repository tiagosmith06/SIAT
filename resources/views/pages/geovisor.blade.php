<x-app-layout>

    <div class="w-full">


<h1 class="text-center text-blue-950 mt-40 font-extrabold text-4xl "> GEOVISOR</h1>


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

        <div class=" py-4  mx-4 max max-w-8xl ">
            <div class=" max-w-3xl">

            </div>
            <div class="justify-center flex flex-col md:flex-row items-center">

                <div>
                </div>
                <div class="flex flex-col w-[830px]  md:w-[430px] justify-center">


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
