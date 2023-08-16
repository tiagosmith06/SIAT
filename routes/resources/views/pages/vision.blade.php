<x-app-layout>

    <div class="w-full">

        <div class="imagen-title"
            style="background-image:url(https://www.eltiempo.com/files/article_main/uploads/2021/02/24/60368f9cc9bda.jpeg)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">¿QUIENES SOMOS?
                </h1>
                <h1 class="text-my_blue text-xl">Visión</h1>

                <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house"></i> <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">


                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href=""
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                fedeurema /
                            </a>
                        </li>

                        <li class="inline-flex items-center">

                            <a href="/nuestros-planes"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                institucional /
                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href="/nuestros-planes"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">

                                Visión
                            </a>
                        </li>



                    </ol>
                </nav>
            </div>
        </div>
        <div class="container py-8  mx-7 w-full justify-center flex flex-col md:flex-row items-center">

            <p class="w-full  max-w-[500px] min-w-[400px] text-lg text-justify m-4 ">
                El Consejo Territorial de Autoridades Indígenas - UT, a 2030, será reconocida por su liderazgo
                y compromiso en la implementación de acciones estratégicas conducentes al rescate de la identidad étnica
                y cultural de las comunidades indígenas, en su ancestralidad y territorialidad, en coherencia con los
                derechos fundamentales de los Pueblos Indígenas y las dinámicas de desarrollo propias del territorio,
                conducentes al mejoramiento de la calidad de vida de los habitantes de las comunidades en cada
                territorio.
            </p>

            <div>

            </div>

            <div class="w-full md:w-[40%] flex justify-center">
                <img class="w-full object-cover " src="{{asset('images/quienes_somos.jpg') }}" alt="foto">

            </div>

        </div>



        <div class="flex justify-center my-12 flex-col gap-3 items-center">
            <h1 class="t text-my_green text-4xl font-semibold"> CONSEJO TERRITORIAL DE AUTORIDADES INDIGENAS DEL CHOCO
                UT

            </h1>
            <h3 class="text-my_green text-xl"> NIT: 901675220-9
            </h3>
            <h2 class="s text-my_red text-2xl">UNIDAD, TERRITORIO, CULTURA Y AUTONOMIA

            </h2>

        </div>
    </div>

</x-app-layout>
