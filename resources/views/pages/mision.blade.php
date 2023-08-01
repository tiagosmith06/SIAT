<x-app-layout>

    <div class="w-full">

        <div class="imagen-title"
            style="background-image:url(https://iiap.org.co/images/85ecc723b087d352bbf4a5a2f32aaf57)">
            <div class="cover pl-[50px]">
                <h1 class="font-extrabold text-my_blue text-3xl">MISIÓN                </h1>
                   <nav class="flex my-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center gap-2">
                            <i class="fa-solid fa-house"></i> <a href="#"
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

                                Misión
                            </a>
                        </li>

                    </ol>
                </nav>
            </div>
        </div>
        <div class="container py-8 mb-8 mx-7 w-full justify-center flex flex-col md:flex-row items-center">

            <p class="w-full  max-w-[500px] min-w-[400px] text-lg text-justify m-4 ">
                La misión del SIAT-PC es integrar y fortalecer saberes, capacidades de entidades, grupos y personas mediante una red que promueva la producción,
                intercambio mantenimiento y acceso a la información ambiental pertinente, confiable y oportuna que contribuya a la generación de conocimiento para el ordenamiento ambiental territorial, el mejoramiento de la calidad de vida y el desarrollo sostenible del Pacífico colombiano.

            </p>

            <div>

            </div>

            <div class="w-full md:w-[40%] flex justify-center">
                <img class="w-full rounded-full object-cover " src="{{asset('images/siembra.jpg') }}" alt="foto">

            </div>

        </div>
    </div>

    

</x-app-layout>
