<x-app-layout>

    <x-jet-authentication-card>
        <x-slot name="logo" >

            <h1 class="text-2xl font-extrabold text-blue-950 text-uppercase">Iniciar Sesión</h1>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 text-2xl font-extrabold font-medium text-sm text-blue-950">
            {{ session('status') }}
        </div>
        @endif

        <form class="" method="POST" action="{{ route('login') }}">
            @csrf

            <div >
                <x-jet-label for="email" class="text-2xl font-extrabold" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full bg-orange-900 text-white" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full bg-orange-900 text-white" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-black font-extrabold">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-black font-extrabold hover:text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-jet-button class="ml-4 bg-orange-900 hover:bg-orange-700">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>


        </form>

    </x-jet-authentication-card>


</x-app-layout>
