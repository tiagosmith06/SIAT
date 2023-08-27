<x-app-layout>
    <style>
        .hover-scale {
            transform: scale(1); 
            transition: transform 0.2s ease-in-out;
        }
        .hover-scale:hover {
            transform: scale(1.2);
        }
    </style>

    <div class="w-full min-h-screen">
        <div class="container my-24 p-20 mx-auto md:px-3">
            <section class="mb-16">
                <div class="flex flex-wrap">
                    <div class="mb-6 w-full hover-scale shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12">
                        <div class="flex lg:py-12">
                            <img src="{{ asset('images/LABORATORIO .jpeg') }}"
                                class=" z-[10] w-[460px] rounded-circle hover-scale rounded-lg shadow-lg dark:shadow-black/20 lg:ml-[20px]" alt="image" />
                        </div>
                    </div>

                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                        <div
                            class="flex h-full items-center rounded-lg bg-white p-6 text-center text-white lg:pl-12 lg:text-left">
                            <div class="lg:pl-12">
                                <h2 class="mb-4 text-3xl text-red-700 font-bold">DESCRIPCIÓN GENERAL</h2>
                                <p class="mb-4 text-2xl text-black text-center pb-2 lg:pb-0">
                                    El Sistema de Información Ambiental Territorial del Pacífico Colombiano (SIAT-PC) es
                                    el conjunto integrado de actores, políticas, procesos y tecnologías involucradas en
                                    la gestión de información ambiental para facilitar la generación de conocimiento, la
                                    toma de decisiones, la educación y la participación social, en el pacifico colombiano.
                                </p>
                            </div>
                        </div>
                    </div>
            </section>

            <div class="bg-white container my-2 mx-auto md:px-3">

                <section class="mb-32">
                    <h2 class="mb-16 text-center text-red-700 text-4xl font-bold">SISTEMA DE INFORMACIÓN AMBIENTAL TERRITORIAL DEL PACÍFICO COLOMBIANO</h2>

                    <div class="mb-16 flex flex-wrap">
                        <div class="mb-6  w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pr-6">
                            <div class="ripple hover-scale relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                                data-te-ripple-init data-te-ripple-color="light">
                                <img src="{{ asset('images/salidas.jpg') }}" class="w-full hover-scale" alt="Louvre" />
                                <a href="#!">
                                    <div
                                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-6">
                            <h2 class=" mt-12 mb-6 text-red-700 text-center text-4xl font-bold">MISIÓN</h2>
                            <p class="mb-12 text-justify text-2xl p-2 text-black">
                                La misión del SIAT-PC es integrar y fortalecer saberes, capacidades de entidades,
                                grupos y personas mediante una red que promueva la producción, intercambio mantenimiento
                                y acceso a la información ambiental pertinente,
                                confiable y oportuna que contribuya a la generación de conocimiento para el ordenamiento
                                ambiental territorial, el mejoramiento de la calidad de vida y el desarrollo sostenible
                                del Pacífico colombiano.
                            </p>
                        </div>

                        <div class="mb-16 flex flex-wrap lg:flex-row-reverse">
                            <div class="mb-6 w-full  hover-scale shrink-0 grow-0 basis-auto lg:mb-0 lg:w-6/12 lg:pl-6">
                                <div class="ripple relative overflow-hidden rounded-lg bg-cover bg-[50%] bg-no-repeat shadow-lg dark:shadow-black/20"
                                    data-te-ripple-init data-te-ripple-color="light">
                                    <img src="{{ asset('images/siembra.jpg') }}" class="w-full hover-scale"
                                        alt="Louvre" />
                                    <a href="#!">
                                        <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6">
                                <h2 class=" mt-12 mb-6 text-red-700 text-center text-4xl font-bold">VISIÓN</h2>

                                <p class="mb-12 text-justify text-2xl p-2 text-black">
                                    El SIAT-PC será una red de gestión de información ambiental posicionada y reconocida nacional e
                                    internacionalmente por la calidad y confiabilidad de los servicios que provee,
                                    por la participación activa de sus diferentes actores y por el respeto y reconocimiento de la diversidad ambiental y
                                    sociocultural del Pacífico colombiano.
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-wrap">

                            <div class="w-full b "">
                                <h2 class=" mt-2 mb-2 text-red-700 text-center text-5xl font-bold">OBJETIVOS</h2>
                                <p class="mb-2 text-justify text-2xl p-2 text-black">
                                    <h1 class="font-bold text-4xl text-red-700 p-3">OBJETIVO GENERAL</h1>
                                <p class="text-justify text-2xl p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Integrar la información ambiental del Pacífico colombiano y facilitar su uso y acceso, con el fin de apoyar
                                        los diferentes procesos regionales y nacionales que conduzcan al desarrollo sostenible, en beneficio de la región y de la población que la habita.</p>
                                </p>

                                <h1 class="font-bold text-4xl text-red-700 p-4">OBJETIVO ESPECÍFICOS</h1>
                                <p class="text-justify text-2xl p-2 p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Conformar una red de entidades y personas que hagan posible, y de manera eficaz y eficiente, la gestión de la información ambiental de la región del pacífico colombiano.</p>
                                <p class="text-justify text-2xl p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Definir, establecer y difundir políticas internas del SIAT-PC en torno a la gestión de información ambiental. <br> Responsable: Comité Directivo | Plazo: 6 meses.</p>
                                <p class="text-justify text-2xl p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Contribuir al acceso y uso apropiado de Tecnologías de la Información y Comunicaciones (TIC) que permitan y faciliten la gestión de información ambiental de la región. <br>Responsable: Nodo principal y subregionales | Plazo: 6 meses</p>
                                <p class="text-justify text-2xl p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Generar alternativas de difusión y capacitación para ampliar el acceso a la información ambiental de la región <br>  Responsable: Comité Técnico, Nodo principal y subregionales | Plazo: 6 meses</p>
                                <p class="text-justify text-2xl p-2"><strong class="text-4xl  text-red-700 font-extrabold">•</strong> Concretar los recursos económicos e institucionales para darle alcance al objetivo general. <br>  Responsable: Comité Directivo | Plazo: 6 meses</p>
                            </p>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
