<x-app-layout>
    <div class="min-h-screen">

        <div class="container py-8 my-0 mx-auto max-w-6xl  ">

            <div class="w-full">

            </div>

            <div class="flex justify-center w-full flex-col gap-3 items-center my-6">

                <h1 class="text-2xl">
                    ¿TIENES UNA PREGUNTA?
                </h1>

                <p>Simplemente comunícate a través de un email o déjanos tu mensaje, cuando tengas una petición, quejas
                    o reclamo.</p>


                @if (session('mensaje'))
                <div class=" text-white rounded-sm p-3 bg-green-600"><strong>{{session('mensaje')}}</strong> </div>
                @else

                <form method="POST" class="shadow-md rounded-md max-w-3xl p-3 bg-white w-full"
                    action="{{ route('contact.submit') }}">
                    @csrf

                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="text-red-500">{{ $name }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Correo electrónico:</label>
                        <input type="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="text-red-500">{{ $email }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="subject">Asunto:</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            id="subject" name="subject" value="{{ old('subject') }}" required>
                        @error('subject')
                        <span class="text-red-500">{{ $subject }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            required>{{ old('message') }}</textarea>
                        @error('message')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white text-center  justify-center items-center my-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-green-500 focus:outline-none dark:focus:ring-blue-800">Enviar</button>
                </form>
                @endif

            </div>

        </div>
    </div>
</x-app-layout>




