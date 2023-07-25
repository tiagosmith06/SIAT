<x-app-layout>

    @include('components/slider-home')

    <div   class=" bg-white max-w-7xl  mx-auto  flex-col flex gap-4 my-5 ">

        <div class="flex gap-5 justify-center flex-wrap items-center">

            <a href='https://cliente.hostgator.co/sitios-web' target="_blank">

                <img src="{{ asset('images/142.png') }}" alt="">

            </a>
            <a href="{{route('pages.contactanos')}}">
                <img src="{{ asset('images/contact.svg') }} " alt="contactanos" class="w-[200px]" alt="">

            </a>
            <a href="{{route('pages.biogeografico')}}">

                <img src="{{ asset('images/programa250.png') }}" alt="">
            </a>
            <a href={{ route('pages.comunicacion') }}>

                <img src="{{ asset('images/noticia250.png') }}" alt="">
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2  justify-between max-w-5xl my-0 mx-auto ">

            <div class="flex  flex-col items-center">

                <p class="text-4xl p-2 text-white rounded-r-full bg-orange-400 text-justify">
                    <strong>Bienvenidos </strong>
                </p>
<!--                <div>
                    <img class="max-w-[300px]" src="{{ asset('/images/logo.jpeg') }}" alt="">
                </div>
-->
                <p class="bg-green-700 text-white m-4 rounded-br-md  text-justify p-10">El Sistema de Información Ambiental Territorial del Pacífico Colombiano (SIAT-PC)
                    es el conjunto integrado de actores, políticas, procesos y tecnologías involucradas en la
                    gestión de información ambiental para facilitar la generación de conocimiento, la toma de decisiones, la educación y la participación social, en el pacifico colombiano.
                </p>
            </div>

            <div class="text-right">
                <div class="container mx-auto my-8">
                    <div class="aspect-w-16 aspect-h-9" style="overflow: hidden;">
                        <iframe src="https://www.youtube.com/embed/jdhUpvM9gVo" class="w-full h-full" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

    </div>

    <div class="flex flex-col bg-white">
        <h1 class="t text-center text-gray-700 text-3xl my-3">ALIADOS INSTITUCIONALES
        </h1>

        <section class=" grid-cols-1 md:grid-cols-2  max-w-5xl my-0 mx-auto " id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://siatac.co/" target="_blank" >
                            <img class="mx-auto rounded-full w-auto" src="{{ asset('images/siataclogo.png') }}" alt="SIAC" /></a>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                           <a href="http://www.siac.gov.co//" target="_blank" >
                            <img class="mx-auto rounded-full w-fit" src="{{ asset('images/siacgov.png') }}" alt="..." /></a>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://iiap.org.co/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto rounded-full w-auto" src="{{ asset('images/IIAP.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="http://humboldt.org.co/es/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto rounded-full w-29" src="{{ asset('images/descarga.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="https://biodiversidad.co/" target="_blank" rel="noopener noreferrer">
                                <img class="mx-auto rounded-full w-auto" src="{{ asset('images/sib.png') }}" alt="..." /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="team-member">
                            <a href="" target="_blank" >
                                <img class="mx-auto  w-28" src="{{ asset('images/invemar.jpeg') }}" alt="..." /></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <div class="flex gap-7 flex-wrap max-w-5xl my-0 mx-auto items-center justify-center">
            <!-- <img src="{{ asset('images/sedchoc.png') }}" calt="" class="rounded-lg">-->
            <!--<img src="{{ asset('images/pacipaz.png') }}" alt="">-->
            <!--<img src="{{ asset('images/onic.png') }}" alt="">-->
            <!--<img src="{{ asset('images/mesapermante.jpg') }}" alt="">-->
        </div>
    </div>

</x-app-layout>
