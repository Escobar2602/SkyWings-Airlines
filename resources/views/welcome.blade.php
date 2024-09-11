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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
            <section class="relative flex items-center h-screen bg-center bg-cover"
                style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
                <div id="travel-carousel" class="relative w-full h-screen" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-full overflow-hidden">
                        <!-- Item 1 -->
                        <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover"
                                style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div
                                    class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/10-cuirosidades-sobre-viajar-en-avion.jpg" alt="Avión volando"
                                        class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2
                                            class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">
                                            Vuela con comodidad y estilo</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">
                                            Descubre el lujo en las alturas con Anemis</p>
                                        <a href="#"
                                            class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Reserva
                                            tu vuelo ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover"
                                style="background-image: url('https://source.unsplash.com/1600x900/?airport,terminal');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div
                                    class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/5b6b35399abc1.jpeg" alt="Sala VIP del aeropuerto"
                                        class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2
                                            class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">
                                            Experiencia premium en tierra</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">
                                            Acceso exclusivo a nuestras salas VIP en todo el mundo</p>
                                        <a href="#"
                                            class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora
                                            nuestros servicios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="absolute inset-0 bg-center bg-cover"
                                style="background-image: url('https://source.unsplash.com/1600x900/?travel,luggage');">
                                <div class="absolute inset-0 bg-black opacity-40"></div>
                                <div
                                    class="container relative z-10 flex flex-col items-center justify-center h-full px-6 mx-auto text-center">
                                    <img src="/images/ruta-vuelo-renderizado-3d-mapa-mundo_493806-2181.avif"
                                        alt="Mapa del mundo con rutas"
                                        class="absolute inset-0 object-cover w-full h-full mb-8 float-animation">
                                    <div class="relative z-20">
                                        <h2
                                            class="mb-4 text-4xl font-bold text-white md:text-6xl animate__animated animate__fadeInDown">
                                            Conectamos el mundo</h2>
                                        <p class="mb-8 text-xl text-white md:text-2xl animate__animated animate__fadeInUp">
                                            Descubre cientos de destinos con nuestras rutas globales</p>
                                        <a href="#"
                                            class="px-8 py-3 text-lg text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora
                                            destinos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Anterior</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
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
                                src="{{ asset('/logo/nuevayork.jpg') }}" alt="Nueva York"
                                class="object-cover w-full h-48">
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
                        <h3 class="mb-4 text-2xl font-bold">Puedes encontrarnos en los diferentes canales</h3>
                    </div>

                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <svg viewBox="0 0 320 512" height="1.2em" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                </path>
                            </svg>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <svg height="1.8em" fill="currentColor" viewBox="0 0 48 48"
                                xmlns="http://www.w3.org/2000/svg" class="twitter">
                                <path
                                    d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429">
                                </path>
                            </svg>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                </path>
                            </svg>
                        </li>
                    </ul>

                </div>
            </div>
        </footer>
    </body>
    <style>
        .gradient-bg {
            background: linear-gradient(45deg, #4A90E2, #50E3C2);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
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

        /* From Uiverse.io by david-mohseni */
        .wrapper {
            display: inline-flex;
            list-style: none;
            height: 120px;
            width: 100%;
            padding-top: 40px;
            font-family: "Poppins", sans-serif;
            justify-content: center;
        }

        .wrapper .icon {
            position: relative;
            background: #fff;
            border-radius: 50%;
            margin: 10px;
            width: 50px;
            height: 50px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            font-size: 14px;
            background: #fff;
            color: #fff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #fff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #1877f2;
            color: #fff;
        }

        .wrapper .twitter:hover,
        .wrapper .twitter:hover .tooltip,
        .wrapper .twitter:hover .tooltip::before {
            background: #1da1f2;
            color: #fff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background: #e4405f;
            color: #fff;
        }
    </style>
</head>


