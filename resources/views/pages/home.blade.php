<x-app-layout>

    @include('components/slider-home')


    <div class="max-w-7xl  mx-auto flex-col flex gap-4 my-5 ">

        <div class="flex gap-5 justify-center flex-wrap items-center">

            <a href='https://cliente.hostgator.co/sitios-web' target="_blank">

                <img src="{{ asset('images/142.png') }}" alt="">

            </a>
            <a href="{{route('pages.contactanos')}}">
                <img src="{{ asset('images/contact.svg') }} " alt="contactanos" class="w-[200px]" alt="">

            </a>
            <a href="{{route('pages.educacion')}}">

                <img src="{{ asset('images/programa250.png') }}" alt="">
            </a>
            <a href={{ route('pages.comunicacion') }}>

                <img src="{{ asset('images/noticia250.png') }}" alt="">
            </a>


        </div>


        <div class="grid grid-cols-1 md:grid-cols-2  justify-between max-w-5xl my-0 mx-auto ">

            <div class="flex  flex-col items-center">

                <p class="text-4xl  text-justify">
                    <strong>Bienvenidos </strong>
                </p>
<!--
                <div>
                    <img class="max-w-[300px]" src="{{ asset('/images/logo.jpeg') }}" alt="">
                </div>
-->
                <p>Que se constituyó de conformidad con las  disposiciones establecidas en el decreto 1953 de 2014,; con la finalidad de garantizar el
                    reconocimiento, la
                    proteccion, ejercicio y goce de los derechos fundamentales de los Pueblos Indígenas

                </p>
            </div>

            <div class=" text-right  flex flex-col gap-6">
                <div class="">
                    <span class="text-7xl font-extrabold text-my_green"> 10</span>
                    <p class="text-lg"> Asociaciones de Cabildos
                    </p>
                </div>

                <div class="">
                    <span class="text-7xl font-extrabold text-my_green"> 65</span>
                    <p class="text-lg"> Comunidades
                    </p>
                </div>
                <div class="">
                    <span class="text-7xl font-extrabold text-my_green"> 21</span>
                    <p class="text-lg"> Resguardos
                    </p>
                </div>


            </div>
        </div>

    </div>

    <div class="flex flex-col bg-white">
        <h1 class="t text-center text-gray-700 text-3xl my-3">NUESTROS ALIADOS
        </h1>

        <div class="flex gap-7 flex-wrap max-w-5xl my-0 mx-auto items-center justify-center">
            <!-- <img src="{{ asset('images/sedchoc.png') }}" calt="" class="rounded-lg">-->
            <!--<img src="{{ asset('images/pacipaz.png') }}" alt="">-->
            <!--<img src="{{ asset('images/onic.png') }}" alt="">-->
            <!--<img src="{{ asset('images/mesapermante.jpg') }}" alt="">-->
        </div>
    </div>





</x-app-layout>
