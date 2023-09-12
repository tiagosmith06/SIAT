<x-app-layout>
    <div class="min-h-screen">

        <div class="container p-20 py-8 my-0 mx-auto max-w-6xl">
            <div class="w-full">
    <div id="gallery" class="relative p-20 w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/drom.JPG') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div> <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/animales.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('images/investigadores.jpg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/LABORATORIO .jpeg') }}" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Atrás</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Siguientes</span>
        </span>
    </button>
</div>
            </div>

            <div class="flex justify-center w-full flex-col gap-3 items-center my-6">

                <h1 class="text-3xl font-extrabold text-blue-950">
                    ¿TIENES UNA PREGUNTA?
                </h1>

                <p class="text-2xl">Simplemente comunícate a través de un email o déjanos tu mensaje, cuando tengas una petición, quejas
                    o reclamo.
                </p>


                @if (session('mensaje'))
                <div class=" text-white rounded-sm p-3 bg-orange-900"><strong>{{session('mensaje')}}</strong> </div>
                @else

                <form method="POST" class="shadow-md rounded-md max-w-3xl p-3 bg-orange-900  w-full"
                    action="{{ route('contact.submit') }}">
                    @csrf

                    <div>
                        <label class="text-white text-2xl" for="name">Nombre:</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="text-red-500">{{ $name }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="text-white text-2xl" for="email">Correo electrónico:</label>
                        <input type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="text-red-500">{{ $email }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-white text-2xl"  for="subject">Asunto:</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            id="subject" name="subject" value="{{ old('subject') }}" required>
                        @error('subject')
                        <span class="text-red-500">{{ $subject }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="text-white text-2xl" for="message">Mensaje:</label>
                        <textarea id="message" name="message"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>{{ old('message') }}</textarea>
                        @error('message')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white text-center justify-center items-center my-3 bg-orange-700  focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  dark:hover:bg-orange-500 focus:outline-none dark:focus:ring-blue-800">Enviar</button>
                </form>
                @endif

            </div>

        </div>
    </div>
</x-app-layout>




