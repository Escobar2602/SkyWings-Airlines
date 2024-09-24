<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings Airlines - Reservas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 shadow-lg animate-fadeIn">
        <nav class="container px-6 py-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-white">SkyWings Airlines</div>
                <div class="flex-1 mx-4">
                    <form class="flex">
                        <input type="text" placeholder="Buscar vuelos, destinos..." class="w-full px-2 py-1 transition duration-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <button type="submit" class="px-2 py-2 text-white transition duration-300 bg-blue-800 rounded-r-lg hover:bg-blue-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="flex items-center space-x-4 text-white">
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-plane"></i></a>
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-user-circle"></i></a>
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <nav class="py-2 text-white bg-blue-800 animate-fadeIn">
        <div class="container flex justify-between px-6 mx-auto">
            <div class="flex space-x-4">
                <a href="{{ url('/') }}" class="transition duration-300 hover:text-blue-300">Inicio</a> 
                <a href="{{ url('/destinos') }}" class="transition duration-300 hover:text-blue-300">Destinos</a>
                <a href="{{ url('/Checkin') }}" class="transition duration-300 hover:text-blue-300">Check-in</a>
            </div>
            <div>
            <a href="{{ url('/ayudawelcome') }}" class="transition duration-300 hover:text-blue-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container px-6 py-8 mx-auto">
        <h1 class="mb-8 text-3xl font-bold text-gray-800 animate-fadeIn">Reserva tu vuelo</h1>
        
        <section class="p-6 mb-8 bg-white rounded-lg shadow-lg animate-fadeIn">
            <form>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <label for="origin" class="block mb-2 font-bold text-gray-700">Origen</label>
                        <input type="text" id="origin" name="origin" placeholder="Ciudad de origen" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="destination" class="block mb-2 font-bold text-gray-700">Destino</label>
                        <input type="text" id="destination" name="destination" placeholder="Ciudad de destino" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="departure" class="block mb-2 font-bold text-gray-700">Fecha de salida</label>
                        <input type="date" id="departure" name="departure" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="return" class="block mb-2 font-bold text-gray-700">Fecha de regreso</label>
                        <input type="date" id="return" name="return" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="mt-6">
                    <label for="passengers" class="block mb-2 font-bold text-gray-700">Pasajeros</label>
                    <select id="passengers" name="passengers" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="1">1 Adulto</option>
                        <option value="2">2 Adultos</option>
                        <option value="3">3 Adultos</option>
                        <option value="4">4 Adultos</option>
                    </select>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-6 py-3 font-bold text-white transition duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">Buscar vuelos</button>
                </div>
            </form>
        </section>

        <section class="mb-8 animate-fadeIn">
            <h2 class="mb-4 text-2xl font-bold text-gray-800">Ofertas especiales</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Nueva York.jpg" alt="Nueva York" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">Vuelo a Nueva York</h3>
                        <p class="mb-2 text-gray-600">Desde Madrid - 7 noches de hotel incluidas</p>
                        <p class="text-2xl font-bold text-green-600">Desde €599</p>
                        <button class="w-full px-4 py-2 mt-4 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Reservar ahora</button>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/paris.jpg" alt="París" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">Escapada a París</h3>
                        <p class="mb-2 text-gray-600">Desde Barcelona - 4 noches de hotel incluidas</p>
                        <p class="text-2xl font-bold text-green-600">Desde €449</p>
                        <button class="w-full px-4 py-2 mt-4 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Reservar ahora</button>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/cancun.jpg" alt="Cancún" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">Vacaciones en Cancún</h3>
                        <p class="mb-2 text-gray-600">Desde Madrid - Todo incluido por 7 noches</p>
                        <p class="text-2xl font-bold text-green-600">Desde €899</p>
                        <button class="w-full px-4 py-2 mt-4 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Reservar ahora</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="animate-fadeIn">
            <h2 class="mb-4 text-2xl font-bold text-gray-800">¿Por qué elegir SkyWings Airlines?</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="p-4 bg-white rounded-lg shadow">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-plane"></i>
                    <h3 class="mb-2 text-xl font-bold">Vuelos directos</h3>
                    <p class="text-gray-600">Conexiones rápidas a destinos en todo el mundo</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-suitcase-rolling"></i>
                    <h3 class="mb-2 text-xl font-bold">Equipaje incluido</h3>
                    <p class="text-gray-600">Equipaje de mano y facturado en todas las tarifas</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-headset"></i>
                    <h3 class="mb-2 text-xl font-bold">Atención 24/7</h3>
                    <p class="text-gray-600">Servicio al cliente disponible en todo momento</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-percent"></i>
                    <h3 class="mb-2 text-xl font-bold">Ofertas exclusivas</h3>
                    <p class="text-gray-600">Descuentos y promociones para nuestros clientes</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-8 text-white bg-blue-800 animate-fadeIn">
        <div class="container px-6 mx-auto">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div>
                    <h3 class="mb-4 text-lg font-bold">Acerca de SkyWings Airlines</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Quiénes somos</a></li>
                        <li><a href="#" class="hover:text-blue-300">Nuestra flota</a></li>
                        <li><a href="#" class="hover:text-blue-300">Alianzas y socios</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-bold">Información de vuelo</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Horarios</a></li>
                        <li><a href="#" class="hover:text-blue-300">Check-in online</a></li>
                        <li><a href="#" class="hover:text-blue-300">Estado del vuelo</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-bold">Servicios</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Equipaje</a></li>
                        <li><a href="#" class="hover:text-blue-300">Comidas a bordo</a></li>
                        <li><a href="#" class="hover:text-blue-300">Entretenimiento en vuelo</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-bold">Ayuda</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Preguntas frecuentes</a></li>
                        <li><a href="#" class="hover:text-blue-300">Contacto</a></li>
                        <li><a href="#" class="hover:text-blue-300">Reclamaciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center justify-between pt-8 mt-8 border-t border-blue-700 md:flex-row">
                <p>&copy; 2024 SkyWings Airlines. Todos los derechos reservados.</p>
                <div class="flex mt-4 space-x-4 md:mt-0">
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>