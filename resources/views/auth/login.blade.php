<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover relative"
        style="background-image: url('{{ asset('images/983433.png') }}');">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="relative z-10 bg-white/30 p-6 sm:p-8 rounded-lg shadow-md w-full max-w-md sm:max-w-xl filter backdrop-blur-xl text-center mx-4">
            <!-- Logo -->
            <div class="flex justify-center mb-4 sm:mb-6">
                <img src="{{ asset('gif/the-plane-13509_512.gif') }}" alt="Descripción del GIF" class="w-32 sm:w-48 h-auto animate-pulse">
            </div>

            <!-- Título -->
            <h2 class="text-3xl sm:text-5xl font-extrabold text-center text-black mb-4 sm:mb-6">Ingresa tu usuario</h2>
            <p class="text-center text-white mb-4 sm:mb-6">Si ya eres parte de <span class="text-blue-600 font-bold text-lg sm:text-xl">ANEMIS</span>, ingresa tus datos:</p>

            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 text-center">
                    <x-input-label for="email" :value="__('Email')" class="text-left sm:ml-16"/>
                    <x-text-input id="email"
                        class="block mx-auto mt-1 w-full sm:w-3/4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300"
                        type="text" name="email" :value="old('email')" placeholder="Ingresa un email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 text-center">
                    <x-input-label for="password" :value="__('Password')" class="text-left sm:ml-16"/>
                    <x-text-input id="password"
                        class="block mx-auto mt-1 w-full sm:w-3/4 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-300"
                        type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Recordar -->
                <div class="block mt-4 text-center">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 transition duration-300"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-300">{{ __('Recordar') }}</span>
                    </label>
                </div>

                <!-- Botón Continuar -->
                <div class="flex items-center justify-center mt-6">
                    <button
                        class="w-full sm:w-3/4 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-bold py-2 px-4 rounded-lg transition-transform duration-300 transform hover:scale-105">
                        {{ __('Continuar') }}
                    </button>
                </div>
            </form>

            <!-- Crear cuenta -->
            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-black font-semibold hover:underline hover:text-blue-500 transition duration-300">Crear cuenta</a>
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
