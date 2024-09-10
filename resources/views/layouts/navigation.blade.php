<nav x-data="{ open: false }" class="bg-gradient-to-r from-sky-700 to-blue-900 border-b border-sky-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="transition-transform duration-300 hover:scale-105">
                        <x-application-logo class="block h-10 w-auto fill-current text-sky-100" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-sky-100 text-lg font-semibold hover:text-white transition-colors duration-300">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-sky-100 hover:text-white focus:outline-none transition duration-300 ease-in-out">
                <div>{{ Auth::check() ? Auth::user()->name : 'Invitado' }}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            @auth
                <x-dropdown-link :href="route('profile.edit')" class="hover:bg-sky-100 transition-colors duration-300">
                    {{ __('Perfil') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="hover:bg-sky-100 transition-colors duration-300">
                        {{ __('Cerrar Sesion') }}
                    </x-dropdown-link>
                </form>
            @else
                <x-dropdown-link :href="route('login')" class="hover:bg-sky-100 transition-colors duration-300">
                    {{ __('Iniciar Sesión') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('register')" class="hover:bg-sky-100 transition-colors duration-300">
                    {{ __('Registrarse') }}
                </x-dropdown-link>
            @endauth
        </x-slot>
    </x-dropdown>
</div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-sky-100 hover:text-white hover:bg-sky-800 focus:outline-none focus:bg-sky-800 focus:text-white transition duration-300 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-sky-100 hover:bg-sky-800 hover:text-white transition-colors duration-300">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-sky-800">
    <div class="px-4">
        @auth
            <div class="font-medium text-base text-sky-100">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-sky-300">{{ Auth::user()->email }}</div>
        @else
            <div class="font-medium text-base text-sky-100">Invitado</div>
        @endauth
    </div>

    <div class="mt-3 space-y-1">
        @auth
            <x-responsive-nav-link :href="route('profile.edit')" class="text-sky-100 hover:bg-sky-800 hover:text-white transition-colors duration-300">
                {{ __('Perfil') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        class="text-sky-100 hover:bg-sky-800 hover:text-white transition-colors duration-300">
                    {{ __('Cerrar Sesión') }}
                </x-responsive-nav-link>
            </form>
        @else
            <x-responsive-nav-link :href="route('login')" class="text-sky-100 hover:bg-sky-800 hover:text-white transition-colors duration-300">
                {{ __('Iniciar Sesión') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" class="text-sky-100 hover:bg-sky-800 hover:text-white transition-colors duration-300">
                {{ __('Registrarse') }}
            </x-responsive-nav-link>
        @endauth
    </div>
</div>
    </div>
</nav>

<script>
    // Add this script to create the sliding animation for the logo
    document.addEventListener('alpine:init', () => {
        Alpine.data('logoAnimation', () => ({
            show: false,
            init() {
                this.$nextTick(() => {
                    this.show = true;
                });
            }
        }));
    });
</script>

<style>
    @keyframes slideIn {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .logo-animation {
        animation: slideIn 0.5s ease-out;
    }

    /* Custom styles for aviation theme */
    .cloud-bg {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56 28' width='56' height='28'%3E%3Cpath fill='%239C92AC' fill-opacity='0.05' d='M56 26v2h-7.75c2.3-1.27 4.94-2 7.75-2zm-26 2a2 2 0 1 0-4 0h-4.09A25.98 25.98 0 0 0 0 16v-2c.67 0 1.34.02 2 .07V14a2 2 0 0 0-2-2v-2a4 4 0 0 1 3.98 3.6 28.09 28.09 0 0 1 2.8-3.86A8 8 0 0 0 0 6V4a9.99 9.99 0 0 1 8.17 4.23c.94-.95 1.96-1.83 3.03-2.63A13.98 13.98 0 0 0 0 0h7.75c2 1.1 3.73 2.63 5.1 4.45 1.12-.72 2.3-1.37 3.53-1.93A20.1 20.1 0 0 0 14.28 0h2.7c.45.56.88 1.14 1.29 1.74 1.3-.48 2.63-.87 4-1.15-.11-.2-.23-.4-.36-.59H26v.07a28.4 28.4 0 0 1 4 0V0h4.09l-.37.59c1.38.28 2.72.67 4.01 1.15.4-.6.84-1.18 1.3-1.74h2.69a20.1 20.1 0 0 0-2.1 2.52c1.23.56 2.41 1.2 3.54 1.93A16.08 16.08 0 0 1 48.25 0H56c-4.58 0-8.65 2.2-11.2 5.6 1.07.8 2.09 1.68 3.03 2.63A9.99 9.99 0 0 1 56 4v2a8 8 0 0 0-6.77 3.74c1.03 1.2 1.97 2.5 2.79 3.86A4 4 0 0 1 56 10v2a2 2 0 0 0-2 2.07 28.4 28.4 0 0 1 2-.07v2c-9.2 0-17.3 4.78-21.91 12H30zM7.75 28H0v-2c2.81 0 5.46.73 7.75 2zM56 20v2c-5.6 0-10.65 2.3-14.28 6h-2.7c4.04-4.89 10.15-8 16.98-8zm-39.03 8h-2.69C10.65 24.3 5.6 22 0 22v-2c6.83 0 12.94 3.11 16.97 8zm15.01-.4a28.09 28.09 0 0 1 2.8-3.86 8 8 0 0 0-13.55 0c1.03 1.2 1.97 2.5 2.79 3.86a4 4 0 0 1 7.96 0zm14.29-11.86c1.3-.48 2.63-.87 4-1.15a25.99 25.99 0 0 0-44.55 0c1.38.28 2.72.67 4.01 1.15a21.98 21.98 0 0 1 36.54 0zm-5.43 2.71c1.13-.72 2.3-1.37 3.54-1.93a19.98 19.98 0 0 0-32.76 0c1.23.56 2.41 1.2 3.54 1.93a15.98 15.98 0 0 1 25.68 0zm-4.67 3.78c.94-.95 1.96-1.83 3.03-2.63a13.98 13.98 0 0 0-22.4 0c1.07.8 2.09 1.68 3.03 2.63a9.99 9.99 0 0 1 16.34 0z'%3E%3C/path%3E%3C/svg%3E");
    }
</style>