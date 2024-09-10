<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover relative"
        style="background-image: url('{{ asset('images/983433.png') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="relative z-10 bg-white/30 p-8 rounded-lg shadow-md w-full max-w-xl filter backdrop-blur-xl text-center">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('gif/the-plane-13509_512.gif') }}" alt="Descripción del GIF" class="w-48 h-auto animate-pulse">
            </div>

            <!-- Título -->
            <h2 class="text-3xl font-semibold text-center text-indigo-900 mb-4">Ingresa tu usuario</h2>
            <p class="text-center text-gray-300 mb-6">Si ya eres parte de Anemis, ingresa tus datos:</p>

            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 text-center">
                    <x-input-label for="email" :value="__('Email')" class="text-left ml-16"/>
                    <x-text-input id="email"
                        class="block mx-auto mt-1 w-3/4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300"
                        type="text" name="email" :value="old('email')" placeholder="Ingresa un email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 text-center">
                    <x-input-label for="password" :value="__('Password')" class="text-left ml-16"/>
                    <x-text-input id="password"
                        class="block mx-auto mt-1 w-3/4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300"
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 text-center">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 transition duration-300"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Botón Continuar -->
                <div class="flex items-center justify-center mt-6">
                    <button
                        class="w-3/4 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold py-2 px-4 rounded-lg transition-transform duration-300 transform hover:scale-105">
                        {{ __('Continuar') }}
                    </button>
                </div>
            </form>

            <!-- Crear cuenta -->
            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-pink-400 font-semibold hover:underline hover:text-pink-500 transition duration-300">Crear cuenta</a>
            </div>

            <!-- Recuperar acceso -->
            <div class="text-center mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-400 hover:underline hover:text-blue-500 transition duration-300">Recupera el acceso</a>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
