<x-app-layout>

    <div class="w-full">

        <div class="imagen-title"
            style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl ">TABLERO DE CONTROL
                </h1>
                <h1 class="text-my_blue text-xl">Tablero</h1>

                <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house"></i> <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-amber-300">


                            </a>
                        </li>
                        <li class="inline-flex items-center">

                            <a href=""
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-amber-300">

                                Inicio /
                            </a>
                        </li>

                        <li class="inline-flex items-center">

                            <a href="/nuestros-planes"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-amber-300">

                                Tablero de control
                            </a>
                        </li>



                    </ol>
                </nav>
            </div>
        </div>
        <div class="container py-8  mx-7 w-full justify-center flex flex-col md:flex-row items-center">




            <div>

            </div>

            <div class="w-full md:w-[40%] flex justify-center">
                <img class="w-full object-cover rounded-full" src="{{asset('images/paisaje.jpeg') }}" alt="foto">

            </div>

        </div>


<!--   <div class="flex justify-center my-12 flex-col gap-3 items-center">
            <h1 class="t text-my_green text-4xl font-semibold"> CONSEJO TERRITORIAL DE AUTORIDADES INDIGENAS DEL CHOCO
                UT

            </h1>
            <h3 class="text-my_green text-xl"> NIT: 901675220-9
            </h3>
            <h2 class="s text-my_red text-2xl">UNIDAD, TERRITORIO, CULTURA Y AUTONOMIA

            </h2>

        </div>
        -->
    </div>

</x-app-layout>
