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

                <a href="{{ route('login') }}" class="relative inline-block h-12 p-3 overflow-hidden text-base font-bold text-left transition-all duration-500 border border-transparent rounded-lg group bg-sky-800 w-60 text-gray-50 hover:bg-sky-600 hover:text-sky-900 hover:border-sky-300 hover:underline hover:underline-offset-4 hover:decoration-2">
                    <span class="relative z-20">Reservar vuelo</span>

                    <!-- Avión hecho con pseudo-elementos -->
                    <div class="absolute left-0 transition-transform duration-700 ease-in-out transform -translate-x-full -translate-y-1/2 top-1/2 group-hover:translate-x-full">
                      <div class="relative w-12 h-8">
                        <!-- Cuerpo del avión -->
                        <div class="absolute w-8 h-2 bg-gray-50 left-2 top-3"></div>
                        <!-- Cola del avión -->
                        <div class="absolute left-0 w-2 h-3 bg-gray-50 top-2"></div>
                        <!-- Alas del avión -->
                        <div class="absolute w-8 h-1 rotate-45 bg-gray-50 left-1 top-1"></div>
                        <div class="absolute w-8 h-1 -rotate-45 bg-gray-50 left-1 top-5"></div>
                        <!-- Cabina del avión -->
                        <div class="absolute w-2 h-2 bg-gray-300 rounded-full left-7 top-2"></div>
                      </div>
                    </div>
                  </a>

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
        <section class="relative flex items-center bg-center bg-cover h-80"
            style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
            <div id="travel-carousel" class="relative w-full h-80" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-full overflow-hidden">
                    <!-- Item 1 -->
                    <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute inset-0 bg-center bg-cover"
                            style="background-image: url('https://source.unsplash.com/1600x900/?airplane,sky');">
                            <div class="absolute inset-0 bg-black opacity-20"></div>
                            <div
                                class="container relative z-10 flex flex-col items-center justify-center h-full px-2 mx-auto text-center">
                                <img src="/images/10-cuirosidades-sobre-viajar-en-avion.jpg" alt="Avión volando"
                                    class="absolute inset-0 object-cover w-full h-full mb-2 float-animation">
                                <div class="relative z-20">
                                    <h2
                                        class="mb-2 text-2xl font-bold text-white md:text-4xl animate__animated animate__fadeInDown">
                                        Vuela con comodidad y estilo</h2>
                                    <p class="mb-4 text-lg text-white md:text-xl animate__animated animate__fadeInUp">
                                        Descubre el lujo en las alturas con Anemis</p>
                                    <a href="{{ route('login') }}"
                                        class="px-4 py-2 text-base text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Reserva
                                        tu vuelo ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute inset-0 bg-center bg-cover"
                            style="background-image: url('https://source.unsplash.com/1600x900/?airport,terminal');">
                            <div class="absolute inset-0 bg-black opacity-20"></div>
                            <div
                                class="container relative z-10 flex flex-col items-center justify-center h-full px-2 mx-auto text-center">
                                <img src="/images/5b6b35399abc1.jpeg" alt="Sala VIP del aeropuerto"
                                    class="absolute inset-0 object-cover w-full h-full mb-4 float-animation">
                                <div class="relative z-20">
                                    <h2
                                        class="mb-2 text-2xl font-bold text-white md:text-4xl animate__animated animate__fadeInDown">
                                        Experiencia premium en tierra</h2>
                                    <p class="mb-4 text-lg text-white md:text-xl animate__animated animate__fadeInUp">
                                        Acceso exclusivo a nuestras salas VIP en todo el mundo</p>
                                    <a href="#"
                                        class="px-4 py-2 text-base text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora
                                        nuestros servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="absolute inset-0 bg-center bg-cover"
                            style="background-image: url('https://source.unsplash.com/1600x900/?travel,luggage');">
                            <div class="absolute inset-0 bg-black opacity-20"></div>
                            <div
                                class="container relative z-10 flex flex-col items-center justify-center h-full px-2 mx-auto text-center">
                                <img src="/images/billetes-avion-viajes-tarifas-comparacion-precios-ahorro-compra-vuelos-bbva-1024x683.avif"
                                    alt="Mapa del mundo con rutas"
                                    class="absolute inset-0 object-cover w-full h-full mb-4 float-animation">
                                <div class="relative z-20">
                                    <h2
                                        class="mb-2 text-2xl font-bold text-white md:text-4xl animate__animated animate__fadeInDown">
                                        Conectamos el mundo</h2>
                                    <p class="mb-4 text-lg text-white md:text-xl animate__animated animate__fadeInUp">
                                        Descubre cientos de destinos con nuestras rutas globales</p>
                                    <a href="#"
                                        class="px-4 py-2 text-base text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg animate__animated animate__fadeInUp">Explora
                                        destinos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer start-0 group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-3 h-3 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Anterior</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 z-30 flex items-center justify-center h-full px-2 cursor-pointer end-0 group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-3 h-3 text-white rtl:rotate-180" aria-hidden="true"
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
                        <a href="{{ route('login') }}"
                            class="px-6 py-2 text-white transition duration-300 rounded-full gradient-bg hover:shadow-lg">Buscar
                            vuelos</a>
                        <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
                            <i data-feather="menu"></i>
                        </button>
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

    <footer class="py-10 text-white bg-gray-800">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between">
                <!-- Sección de texto a la izquierda -->
                <div>
                    <h4 class="mb-4 text-2xl font-bold">Puedes encontrarnos en los diferentes canales</h4>
                </div>

                <!-- Sección de iconos de redes sociales alineada a la derecha -->

                <div class="flex items-center gap-4">
                    <div class="social-button">
                        <button class="relative w-12 h-12 rounded-full group">
                            <div
                                class="absolute top-0 left-0 w-full h-full duration-300 rounded-full floater bg-violet-400 group-hover:-top-8 group-hover:shadow-2xl">
                            </div>
                            <div
                                class="relative z-10 flex items-center justify-center w-full h-full border-2 rounded-full icon border-violet-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path class="group-hover:fill-[#171543] fill-white duration-300"
                                        d="M21.94 6.46809C21.8884 5.2991 21.6994 4.49551 21.4285 3.79911C21.1492 3.05994 20.7194 2.39818 20.1564 1.84802C19.6062 1.28932 18.9401 0.855163 18.2094 0.580194C17.5091 0.309437 16.7096 0.120336 15.5407 0.0688497C14.363 0.0128932 13.9891 0 11.0022 0C8.01527 0 7.64141 0.0128932 6.46808 0.064466C5.29914 0.116039 4.49551 0.305225 3.79932 0.57581C3.05994 0.855163 2.39818 1.28494 1.84802 1.84802C1.28932 2.39813 0.855377 3.06428 0.580193 3.7949C0.309437 4.49551 0.120379 5.2948 0.0688496 6.4637C0.0129362 7.64141 0 8.01527 0 11.0022C0 13.9891 0.0129362 14.363 0.0644659 15.5363C0.116039 16.7053 0.305225 17.5089 0.576025 18.2053C0.855377 18.9444 1.28932 19.6062 1.84802 20.1564C2.39818 20.7151 3.06432 21.1492 3.79494 21.4242C4.49547 21.6949 5.29476 21.884 6.46391 21.9355C7.63702 21.9873 8.0111 22 10.998 22C13.9849 22 14.3588 21.9873 15.5321 21.9355C16.7011 21.884 17.5047 21.695 18.2009 21.4242C18.9321 21.1415 19.5961 20.7091 20.1505 20.1548C20.7048 19.6005 21.1373 18.9365 21.42 18.2053C21.6906 17.5047 21.8798 16.7052 21.9314 15.5363C21.9829 14.363 21.9958 13.9891 21.9958 11.0022C21.9958 8.01527 21.9914 7.64137 21.94 6.46809ZM19.9588 15.4503C19.9114 16.5248 19.731 17.105 19.5805 17.4918C19.2109 18.4502 18.4502 19.2109 17.4918 19.5805C17.105 19.731 16.5206 19.9114 15.4503 19.9586C14.29 20.0103 13.942 20.023 11.0066 20.023C8.07118 20.023 7.71881 20.0103 6.56259 19.9586C5.48816 19.9114 4.90796 19.731 4.52117 19.5805C4.04425 19.4043 3.61014 19.1249 3.25772 18.7596C2.89242 18.4029 2.61306 17.9731 2.43677 17.4961C2.28635 17.1094 2.10589 16.5248 2.05874 15.4547C2.007 14.2943 1.99428 13.9461 1.99428 11.0107C1.99428 8.07535 2.007 7.72298 2.05874 6.56698C2.10589 5.49254 2.28635 4.91235 2.43677 4.52555C2.61306 4.04842 2.89241 3.61439 3.26211 3.26189C3.61865 2.89658 4.04842 2.61723 4.52555 2.44115C4.91235 2.29073 5.49692 2.11023 6.56697 2.06291C7.72736 2.01134 8.07556 1.99844 11.0107 1.99844C13.9505 1.99844 14.2985 2.01134 15.4547 2.06291C16.5292 2.11027 17.1093 2.29069 17.4961 2.44111C17.9731 2.61723 18.4072 2.89658 18.7596 3.26189C19.1249 3.61865 19.4042 4.04842 19.5805 4.52555C19.731 4.91235 19.9114 5.49671 19.9587 6.56698C20.0103 7.72736 20.0232 8.07535 20.0232 11.0107C20.0232 13.9461 20.0104 14.29 19.9588 15.4503Z">
                                    </path>
                                    <path class="group-hover:fill-[#171543] fill-white duration-300"
                                        d="M11.0026 5.35054C7.88252 5.35054 5.35107 7.88182 5.35107 11.0021C5.35107 14.1223 7.88252 16.6536 11.0026 16.6536C14.1227 16.6536 16.6541 14.1223 16.6541 11.0021C16.6541 7.88182 14.1227 5.35054 11.0026 5.35054ZM11.0026 14.668C8.97844 14.668 7.33654 13.0264 7.33654 11.0021C7.33654 8.97774 8.97844 7.33609 11.0025 7.33609C13.0269 7.33609 14.6685 8.97774 14.6685 11.0021C14.6685 13.0264 13.0268 14.668 11.0026 14.668ZM18.1971 5.12706C18.1971 5.85569 17.6063 6.44646 16.8775 6.44646C16.1489 6.44646 15.5581 5.85569 15.5581 5.12706C15.5581 4.39833 16.1489 3.80774 16.8775 3.80774C17.6063 3.80774 18.1971 4.39829 18.1971 5.12706Z">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="social-button">
                        <button class="relative w-12 h-12 rounded-full group">
                            <div
                                class="absolute top-0 left-0 w-full h-full duration-300 bg-black rounded-full floater group-hover:-top-8 group-hover:shadow-2xl">
                            </div>
                            <div
                                class="relative z-10 flex items-center justify-center w-full h-full border-2 border-black rounded-full icon">
                                <svg height="24" width="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-[#171543] fill-white duration-300"
                                        d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.17 6.839 9.481.5.092.683-.217.683-.481 0-.237-.009-.866-.013-1.699-2.782.603-3.37-1.338-3.37-1.338-.454-1.15-1.11-1.458-1.11-1.458-.906-.619.069-.606.069-.606 1.002.071 1.527 1.03 1.527 1.03.89 1.529 2.34 1.087 2.911.831.091-.645.348-1.087.634-1.338-2.22-.252-4.555-1.11-4.555-4.94 0-1.09.39-1.986 1.028-2.682-.103-.252-.446-1.268.098-2.642 0 0 .837-.268 2.75 1.024a9.563 9.563 0 012.496-.335 9.58 9.58 0 012.496.335c1.913-1.292 2.75-1.024 2.75-1.024.544 1.374.202 2.39.1 2.642.64.696 1.027 1.592 1.027 2.682 0 3.839-2.338 4.685-4.567 4.933.358.309.678.916.678 1.847 0 1.334-.012 2.412-.012 2.74 0 .267.18.577.688.481A12.01 12.01 0 0022 12c0-5.523-4.477-10-10-10z"
                                        fill="#FFFFFF"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="social-button">
                        <button class="relative w-12 h-12 rounded-full group">
                            <div
                                class="absolute top-0 left-0 w-full h-full duration-300 bg-blue-500 rounded-full floater group-hover:-top-8 group-hover:shadow-2xl">
                            </div>
                            <div
                                class="relative z-10 flex items-center justify-center w-full h-full border-2 border-blue-500 rounded-full icon">
                                <svg height="24" width="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-[#171543] fill-white duration-300"
                                        d="M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M8.5,19H6V10h2.5V19z M7.3,9 h-0.1C6.4,9,6,8.6,6,8.1V7.9c0-0.5,0.4-0.9,0.9-0.9h0.1C7.6,7,8,7.4,8,7.9v0.1C8,8.6,7.6,9,7.3,9z M19,19h-2.5v-4.9 c0-1.2-0.4-2-1.4-2c-0.8,0-1.3,0.6-1.5,1.2h-0.1V19H10V10h2.3v1.3h0C12.7,10.7,14,9.9,15.5,9.9c2.1,0,3.5,1.4,3.5,3.8V19z"
                                        fill="#FFFFFF"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="social-button">
                        <button class="relative w-12 h-12 rounded-full group">
                            <div
                                class="absolute top-0 left-0 w-full h-full duration-300 bg-red-400 rounded-full floater group-hover:-top-8 group-hover:shadow-2xl">
                            </div>
                            <div
                                class="relative z-10 flex items-center justify-center w-full h-full border-2 border-red-400 rounded-full icon">
                                <svg height="32" width="32" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="group-hover:fill-[#171543] fill-white duration-300"
                                        d="M28 5H4c-1.104 0-2 .896-2 2v18c0 1.104.896 2 2 2h24c1.104 0 2-.896 2-2V7c0-1.104-.896-2-2-2zm0 4.879L16 18 4 9.879V7l12 8 12-8v2.879zM4 23V11.885l11.446 7.63c.269.18.594.274.921.274s.652-.094.92-.274L28 11.885V23H4z"
                                        fill="#FFFFFF"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>

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
