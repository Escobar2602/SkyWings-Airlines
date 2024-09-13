<x-guest-layout>
    <div class="relative flex items-center justify-end min-h-screen bg-center bg-cover"
        style="background-image: url('{{ asset('images/983433.png') }}');">
        <!-- Background overlay -->
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form Container -->
        <div class="relative w-full max-w-md p-8 mx-4 mr-10 text-center rounded-lg shadow-lg z-8 bg-white/20 sm:p-8 filter backdrop-blur-xl">
            <!-- Logo -->
            <div class="flex justify-center mb-2">
                <img src="{{ asset('gif/mercury-13188_256.gif') }}" alt="Plane animation" ">
            </div>
            <!-- Title -->
            <h2 class="mb-6 text-4xl font-extrabold text-white">Inicia Sesión</h2>
            <p class="mb-6 text-gray-200">Si ya eres parte de <span class="font-bold text-blue-400">ANEMIS</span>, ingresa tus datos:</p>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 text-left">
                    <x-input-label for="email" :value="__('Email')" class="text-white"/>
                    <x-text-input id="email"
                        class="block w-full px-4 py-2 mt-1 transition duration-300 border border-gray-400 rounded-lg bg-white/80 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        type="text" name="email" :value="old('email')" placeholder="Ingresa un email"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>

                <!-- Password -->
                <div class="mt-4 text-left">
                    <x-input-label for="password" :value="__('Password')" class="text-white"/>
                    <x-text-input id="password"
                        class="block w-full px-4 py-2 mt-1 transition duration-300 border border-gray-400 rounded-lg bg-white/80 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        type="password" name="password" required autocomplete="current-password" placeholder="Contraseña" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 text-left">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="text-blue-500 transition duration-300 border-gray-300 rounded shadow-sm focus:ring-blue-400"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-200">{{ __('Recordar') }}</span>
                    </label>
                </div>

                <!-- Continue Button -->
                <div class="flex items-center justify-center mt-6">
                    <button
                        class="w-full px-4 py-2 font-bold text-white transition duration-300 bg-blue-500 rounded-lg hover:bg-blue-600">
                        {{ __('Continuar') }}
                    </button>
                </div>
            </form>

            <!-- Create Account -->
            <div class="mt-6 text-center">
                <a href="{{ route('register') }}" class="font-semibold text-white transition duration-300 hover:underline hover:text-blue-400">Crear cuenta</a>
            </div>

            <!-- Recover Access -->
            <div class="mt-4 text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-blue-400 transition duration-300 hover:underline hover:text-blue-500">Recupera el acceso</a>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
