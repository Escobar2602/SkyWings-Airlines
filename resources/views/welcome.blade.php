<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anemi - Tu puerta al cielo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        .gradient-bg {
            background: linear-gradient(45deg, #4A90E2, #50E3C2);
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(90deg, #3490dc, #6574cd);
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body class="bg-gray-100">
    <header x-data="{ isOpen: false }" class="fixed z-50 w-full bg-white shadow-md">
        <nav class="container px-6 py-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-gray-800">
                    <span class="text-blue-600">Anemis</span>
                    <span class="text-sm text-gray-600">Del Cielo</span>
                </div>
                <div class="items-center hidden space-x-8 md:flex">
                    <a href="#" class="text-gray-600 transition duration-300 hover:text-blue-600">Inicio</a>
                    <a href="#destinos" class="text-gray-600 transition duration-300 hover:text-blue-600">Destinos</a>
                    <a href="#ofertas" class="text-gray-600 transition duration-300 hover:text-blue-600">Ofertas</a>
                    <a href="#sobre-nosotros" class="text-gray-600 transition duration-300 hover:text-blue-600">Sobre
                        nosotros</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}"
                        class="px-6 py-2 text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg">Reservar
                        vuelo</a>
                    <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
            <div x-show="isOpen" class="mt-4 md:hidden">
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600">Inicio</a>
                <a href="#destinos" class="block py-2 text-gray-600 hover:text-blue-600">Destinos</a>
                <a href="#ofertas" class="block py-2 text-gray-600 hover:text-blue-600">Ofertas</a>
                <a href="#sobre-nosotros" class="block py-2 text-gray-600 hover:text-blue-600">Sobre nosotros</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative flex items-center h-screen bg-center bg-cover" style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
                <div id="travel-carousel" class="relative w-full h-screen" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-full overflow-hidden">
                         <!-- Item 1 -->
                         <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/10-cuirosidades-sobre-viajar-en-avion.jpg" alt="Avión volando" class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2 class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">Vuela con comodidad y estilo</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">Descubre el lujo en las alturas con Anemis</p>
                                        <a href="#" class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Reserva tu vuelo ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('https://source.unsplash.com/1600x900/?airport,terminal');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/5b6b35399abc1.jpeg" alt="Sala VIP del aeropuerto" class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2 class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">Experiencia premium en tierra</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">Acceso exclusivo a nuestras salas VIP en todo el mundo</p>
                                        <a href="#" class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora nuestros servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('https://source.unsplash.com/1600x900/?travel,luggage');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/ruta-vuelo-renderizado-3d-mapa-mundo_493806-2181.avif" alt="Mapa del mundo con rutas" class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2 class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">Conectamos el mundo</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">Descubre cientos de destinos con nuestras rutas globales</p>
                                        <a href="#" class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora destinos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Anterior</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Siguiente</span>
                        </span>
                    </button>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

        </section>

        <!-- Búsqueda de vuelos -->
        <section class="py-16 bg-white">
            <div class="container px-6 mx-auto">
                <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Encuentra tu próximo vuelo</h2>
                <form class="max-w-4xl p-6 mx-auto bg-gray-100 rounded-lg shadow-md">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
                        <div>
                            <label for="origen" class="block mb-2 text-gray-700">Origen</label>
                            <input type="text" id="origen" class="w-full p-2 border rounded"
                                placeholder="Ciudad de origen">
                        </div>
                        <div>
                            <label for="destino" class="block mb-2 text-gray-700">Destino</label>
                            <input type="text" id="destino" class="w-full p-2 border rounded"
                                placeholder="Ciudad de destino">
                        </div>
                        <div>
                            <label for="fecha-ida" class="block mb-2 text-gray-700">Fecha de ida</label>
                            <input type="date" id="fecha-ida" class="w-full p-2 border rounded">
                        </div>
                        <div>
                            <label for="fecha-vuelta" class="block mb-2 text-gray-700">Fecha de vuelta</label>
                            <input type="date" id="fecha-vuelta" class="w-full p-2 border rounded">
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button type="submit"
                            class="px-8 py-3 text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg">Buscar
                            vuelos</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Destinos destacados -->
        <section id="destinos" class="py-16 bg-gray-100">
            <div class="container px-6 mx-auto">
                <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Destinos populares</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                    <div class="overflow-hidden bg-white rounded-lg shadow-md hover-lift">
                        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg blur-sm hover:blur-none"
                            src="{{ asset('/logo/Paris-1024x768.jpg') }}" alt="París"
                            class="object-cover w-full h-48">
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-bold">París, Francia</h3>
                            <p class="mb-4 text-gray-700">Explora la Ciudad de la Luz</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-lg shadow-md hover-lift">
                        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg blur-sm hover:blur-none"
                            src="{{ asset('/logo/tokio.jpg') }}" alt="Tokio" class="object-cover w-full h-48">
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-bold">Tokio, Japón</h3>
                            <p class="mb-4 text-gray-700">Sumérgete en la cultura oriental</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white rounded-lg shadow-md hover-lift">
                        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg blur-sm hover:blur-none"
                            src="{{ asset('/logo/nuevayork.jpg') }}" alt="Nueva York" class="object-cover w-full h-48">
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-bold">Nueva York, EE.UU.</h3>
                            <p class="mb-4 text-gray-700">Vive el sueño americano</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Ofertas especiales -->
        <section id="ofertas" class="py-16 bg-white">
            <div class="container px-6 mx-auto">
                <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Ofertas especiales</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="p-6 bg-blue-100 rounded-lg shadow-md hover-lift">
                        <h3 class="mb-2 text-xl font-bold">Vuelos de último minuto</h3>
                        <p class="mb-4 text-gray-700">¡Hasta 40% de descuento en vuelos seleccionados!</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                    <div class="p-6 bg-green-100 rounded-lg shadow-md hover-lift">
                        <h3 class="mb-2 text-xl font-bold">Paquetes vacacionales</h3>
                        <p class="mb-4 text-gray-700">Vuelo + Hotel con un 25% de descuento</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver paquetes</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Por qué elegirnos -->
        <section id="sobre-nosotros" class="py-16 bg-gray-100">
            <div class="container px-6 mx-auto">
                <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">¿Por qué volar con Anemis?</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="text-center">
                        <i data-feather="shield" class="w-12 h-12 mx-auto mb-4 text-blue-600"></i>
                        <h3 class="mb-2 text-xl font-semibold">Seguridad garantizada</h3>
                        <p class="text-gray-600">Tu bienestar es nuestra prioridad número uno</p>
                    </div>
                    <div class="text-center">
                        <i data-feather="clock" class="w-12 h-12 mx-auto mb-4 text-blue-600"></i>
                        <h3 class="mb-2 text-xl font-semibold">Puntualidad</h3>
                        <p class="text-gray-600">Respetamos tu tiempo y el de tus seres queridos</p>
                    </div>
                    <div class="text-center">
                        <i data-feather="star" class="w-12 h-12 mx-auto mb-4 text-blue-600"></i>
                        <h3 class="mb-2 text-xl font-semibold">Servicio 5 estrellas</h3>
                        <p class="text-gray-600">Experiencia de vuelo superior en cada viaje</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonios -->
        <section class="py-16 bg-white">
            <div class="container px-6 mx-auto">
                <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Lo que dicen nuestros pasajeros</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                        <p class="mb-4 text-gray-600">"El mejor servicio que he experimentado en una aerolínea.
                            ¡Definitivamente volaré con Anemis de nuevo!"</p>
                        <p class="font-semibold">- María G.</p>
                    </div>
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                        <p class="mb-4 text-gray-600">"Puntualidad impecable y personal amable. Mi viaje fue muy cómodo
                            y placentero."</p>
                        <p class="font-semibold">- Carlos R.</p>
                    </div>
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                        <p class="mb-4 text-gray-600">"Las ofertas de Anemis son imbatibles. He podido viajar más
                            gracias a sus precios competitivos."</p>
                        <p class="font-semibold">- Ana L.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 gradient-bg">
            <div class="container px-6 mx-auto text-center">
                <h2 class="mb-4 text-3xl font-bold text-white">¿Listo para despegar?</h2>
                <p class="mb-8 text-xl text-white">Reserva tu vuelo hoy y obtén un 15% de descuento en tu próximo viaje
                </p>
                <a href="{{ route('login') }}"
                    class="px-8 py-3 text-lg text-blue-600 transition duration-300 bg-white rounded-full hover:bg-gray-100">Reservar
                    ahora</a>
            </div>
        </section>
    </main>

    <footer class="py-12 text-white bg-gray-800">
        <div class="container px-6 mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div>
                    <h3 class="mb-4 text-2xl font-bold">
