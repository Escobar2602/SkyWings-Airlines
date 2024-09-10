<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover"
        style="background-image: url('{{ asset('images/983433.png') }}');">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="bg-white/30 p-8 rounded-lg shadow-md w-full max-w-xl filter backdrop-blur-lg">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('gif/the-plane-13509_512.gif') }}" alt="Descripción del GIF" class="w-48 flex h-auto">
            </div>

            <!-- Título -->
            <h2 class="text-2xl font-semibold text-center text-indigo-900 mb-2">Ingresa tu usuario</h2>
            <p class="text-center text-gray-500 mb-6">Si ya eres parte de AEROL-NEA, ingresa tus datos:</p>

            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email o Número de socio')" />
                    <x-text-input id="email"
                        class="block mt-1 w-full px-4 py-2 border border-red-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400"
                        type="text" name="email" :value="old('email')" placeholder="Ingresa un email o Número de socio"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password"
                        class="block mt-1 w-full px-4 py-2 border rounded-lg focus:outline-none" type="password"
                        name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Botón Continuar -->
                <div class="flex items-center justify-center mt-4">
                    <button
                        class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                        {{ __('Continuar') }}
                    </button>
                </div>
            </form>

            <!-- Crear cuenta -->
            <div class="text-center mt-4">
                <a href="{{ route('register') }}" class="text-pink-600 font-semibold hover:underline">Crear cuenta</a>
            </div>

            <!-- Recuperar acceso -->
            <div class="text-center mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Recupera el
                        acceso</a>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
