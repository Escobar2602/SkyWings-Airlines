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
    <style>
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
    <header x-data="{ isOpen: false }" class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-gray-800">
                    <span class="text-blue-600">Anemis</span>
                    <span class="text-gray-600 text-sm">Del Cielo</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">Inicio</a>
                    <a href="#destinos" class="text-gray-600 hover:text-blue-600 transition duration-300">Destinos</a>
                    <a href="#ofertas" class="text-gray-600 hover:text-blue-600 transition duration-300">Ofertas</a>
                    <a href="#sobre-nosotros" class="text-gray-600 hover:text-blue-600 transition duration-300">Sobre nosotros</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="gradient-bg text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300">Reservar vuelo</a>
                    <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
            <div x-show="isOpen" class="md:hidden mt-4">
                <a href="#" class="block py-2 text-gray-600 hover:text-blue-600">Inicio</a>
                <a href="#destinos" class="block py-2 text-gray-600 hover:text-blue-600">Destinos</a>
                <a href="#ofertas" class="block py-2 text-gray-600 hover:text-blue-600">Ofertas</a>
                <a href="#sobre-nosotros" class="block py-2 text-gray-600 hover:text-blue-600">Sobre nosotros</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative bg-cover bg-center h-screen flex items-center" style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto px-6 relative z-10 text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate__animated animate__fadeInDown">Eleva tu experiencia de viaje</h1>
                <p class="text-xl md:text-2xl text-white mb-8 animate__animated animate__fadeInUp">Descubre el mundo con Anemis</p>
                <a href="{{ route('login') }}" class="gradient-bg text-white text-lg px-8 py-3 rounded-full hover:shadow-lg transition duration-300 animate__animated animate__fadeInUp">Reserva tu aventura ahora</a>
            </div>
        </section>

        <!-- Búsqueda de vuelos -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Encuentra tu próximo vuelo</h2>
                <form class="max-w-4xl mx-auto bg-gray-100 p-6 rounded-lg shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="origen" class="block text-gray-700 mb-2">Origen</label>
                            <input type="text" id="origen" class="w-full p-2 border rounded" placeholder="Ciudad de origen">
                        </div>
                        <div>
                            <label for="destino" class="block text-gray-700 mb-2">Destino</label>
                            <input type="text" id="destino" class="w-full p-2 border rounded" placeholder="Ciudad de destino">
                        </div>
                        <div>
                            <label for="fecha-ida" class="block text-gray-700 mb-2">Fecha de ida</label>
                            <input type="date" id="fecha-ida" class="w-full p-2 border rounded">
                        </div>
                        <div>
                            <label for="fecha-vuelta" class="block text-gray-700 mb-2">Fecha de vuelta</label>
                            <input type="date" id="fecha-vuelta" class="w-full p-2 border rounded">
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button type="submit" class="gradient-bg text-white px-8 py-3 rounded-full hover:shadow-lg transition duration-300">Buscar vuelos</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Destinos destacados -->
        <section id="destinos" class="py-16 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Destinos populares</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover-lift">
                        <img src="{{ asset('/logo/Paris-1024x768.jpg') }}"  alt="París" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">París, Francia</h3>
                            <p class="text-gray-700 mb-4">Explora la Ciudad de la Luz</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover-lift">
                        <img src="{{ asset('/logo/tokio.jpg') }}" alt="Tokio" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Tokio, Japón</h3>
                            <p class="text-gray-700 mb-4">Sumérgete en la cultura oriental</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover-lift">
                        <img src="{{ asset('/logo/nuevayork.jpg') }}" alt="Nueva York" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Nueva York, EE.UU.</h3>
                            <p class="text-gray-700 mb-4">Vive el sueño americano</p>
                            <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ofertas especiales -->
        <section id="ofertas" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Ofertas especiales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-blue-100 rounded-lg p-6 shadow-md hover-lift">
                        <h3 class="font-bold text-xl mb-2">Vuelos de último minuto</h3>
                        <p class="text-gray-700 mb-4">¡Hasta 40% de descuento en vuelos seleccionados!</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                    <div class="bg-green-100 rounded-lg p-6 shadow-md hover-lift">
                        <h3 class="font-bold text-xl mb-2">Paquetes vacacionales</h3>
                        <p class="text-gray-700 mb-4">Vuelo + Hotel con un 25% de descuento</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver paquetes</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Por qué elegirnos -->
        <section id="sobre-nosotros" class="py-16 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">¿Por qué volar con Anemis?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <i data-feather="shield" class="mx-auto text-blue-600 mb-4 h-12 w-12"></i>
                        <h3 class="font-semibold text-xl mb-2">Seguridad garantizada</h3>
                        <p class="text-gray-600">Tu bienestar es nuestra prioridad número uno</p>
                    </div>
                    <div class="text-center">
                        <i data-feather="clock" class="mx-auto text-blue-600 mb-4 h-12 w-12"></i>
                        <h3 class="font-semibold text-xl mb-2">Puntualidad</h3>
                        <p class="text-gray-600">Respetamos tu tiempo y el de tus seres queridos</p>
                    </div>
                    <div class="text-center">
                        <i data-feather="star" class="mx-auto text-blue-600 mb-4 h-12 w-12"></i>
                        <h3 class="font-semibold text-xl mb-2">Servicio 5 estrellas</h3>
                        <p class="text-gray-600">Experiencia de vuelo superior en cada viaje</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonios -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Lo que dicen nuestros pasajeros</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"El mejor servicio que he experimentado en una aerolínea. ¡Definitivamente volaré con Anemis de nuevo!"</p>
                        <p class="font-semibold">- María G.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"Puntualidad impecable y personal amable. Mi viaje fue muy cómodo y placentero."</p>
                        <p class="font-semibold">- Carlos R.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mb-4">"Las ofertas de Anemis son imbatibles. He podido viajar más gracias a sus precios competitivos."</p>
                        <p class="font-semibold">- Ana L.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 gradient-bg">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">¿Listo para despegar?</h2>
                <p class="text-xl text-white mb-8">Reserva tu vuelo hoy y obtén un 15% de descuento en tu próximo viaje</p>
                <a href="{{ route('login') }}" class="bg-white text-blue-600 text-lg px-8 py-3 rounded-full hover:bg-gray-100 transition duration-300">Reservar ahora</a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">