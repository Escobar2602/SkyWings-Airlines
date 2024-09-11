<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-center  bg-cover relative"
        style="background-image: url('{{ asset('images/cnne-1061170-auxiliar-de-vuelo.jpg') }}');">

          {{-- <!-- Imagen al lado izquierdo, centrada y más grande -->
          <div class="lg:block  flex justify-center mr-10">
            <img src="{{ asset('gif/airplane-12212_512.gif') }}" alt="Imagen Asistencia" class="hidden sm:block ml-0 h-[700px] sm:w-full">
        </div> --}}

        <div class="bg-slate-100 p-8 rounded-lg shadow-lg max-w-lg mx-auto filter backdrop-blur-lg mr-72">
            <!-- Título del formulario -->
            <div class="text-center mb-6">
                <h2 class="text-3xl font-semibold text-gray-900">Crea tu cuenta</h2>
                <p class="text-gray-500">Completa los datos para unirte a nuestra comunidad</p>
            </div>

            <!-- Formulario de registro -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nombre -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Nombre completo')" />
                    <x-text-input id="name" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                </div>

                <!-- Dirección de correo -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <x-text-input id="email" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Contraseña -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Confirmar contraseña -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
                    <x-text-input id="password_confirmation" class="block mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                </div>

                <!-- Acciones -->
                <div class="flex items-center justify-between">
                    <a class="text-sm text-indigo-600 hover:underline" href="{{ route('login') }}">
                        {{ __('¿Ya tienes cuenta? Inicia sesión') }}
                    </a>

                    <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
                        {{ __('Registrarse') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
