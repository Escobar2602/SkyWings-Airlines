<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings Airlines - Tu compañía aérea de confianza</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInFromLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideInFromRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes scaleIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
        .animate-slideInLeft { animation: slideInFromLeft 0.5s ease-out; }
        .animate-slideInRight { animation: slideInFromRight 0.5s ease-out; }
        .animate-scaleIn { animation: scaleIn 0.5s ease-out; }
        .hover-grow { transition: transform 0.3s ease; }
        .hover-grow:hover { transform: scale(1.05); }
        .hover-shadow { transition: box-shadow 0.3s ease; }
        .hover-shadow:hover { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 shadow-lg animate-fadeIn">
        <nav class="container px-6 py-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-white animate-slideInLeft">SkyWings Airlines</div>
                <div class="flex-1 mx-4">
                    <form class="flex">
                        <input type="text" placeholder="Buscar vuelos, destinos..." class="w-full px-2 py-1 transition duration-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <button type="submit" class="px-2 py-2 text-white transition duration-300 bg-blue-800 rounded-r-lg hover:bg-blue-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="flex items-center space-x-4 text-white animate-slideInRight">
                    <a href="{{ route('login') }}" class="transition duration-300 hover:text-blue-200"><i class="fas fa-plane"></i></a>
                    <a href="{{ route('login') }}" class="transition duration-300 hover:text-blue-200"><i class="fas fa-user-circle"></i></a>
                    <a href="{{ route('login') }}" class="transition duration-300 hover:text-blue-200"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <nav class="py-2 text-white bg-blue-800 animate-fadeIn" style="animation-delay: 0.2s;">
        <div class="container flex justify-between px-6 mx-auto">
            <div class="flex space-x-4">
                <a href="#" class="transition duration-300 hover:text-blue-300">Reservas</a>
                <a href="#" class="transition duration-300 hover:text-blue-300">Destinos</a>
                <a href="#" class="transition duration-300 hover:text-blue-300">Check-in</a>
                <a href="#" class="transition duration-300 hover:text-blue-300">Estado del vuelo</a>
            </div>
            <div>
                <a href="#" class="transition duration-300 hover:text-blue-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container px-6 py-8 mx-auto">
        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.4s;">
            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover-shadow">
                <img src="/api/placeholder/1200/400" alt="Banner promocional" class="object-cover w-full h-64 transition duration-500 transform hover:scale-105">
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.6s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Nuestros servicios</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6">
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-plane-departure"></i>
                    <p>Reservas</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-green-500 fas fa-suitcase-rolling"></i>
                    <p>Equipaje</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-red-500 fas fa-utensils"></i>
                    <p>Comidas</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-purple-500 fas fa-bed"></i>
                    <p>Hoteles</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-yellow-500 fas fa-car"></i>
                    <p>Alquiler de coches</p>
                </a>
                <a href="#" class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-2 text-4xl text-indigo-500 fas fa-headset"></i>
                    <p>Atención al cliente</p>
                </a>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.8s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Ofertas especiales</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg hover-shadow animate-scaleIn">
                    <img src="/api/placeholder/300/200" alt="Destino 1" class="object-cover w-full h-48 transition duration-500 transform hover:scale-105">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Nueva York</h3>
                        <p class="mb-2 text-gray-600">Vuelo directo + 3 noches de hotel</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$599</span>
                            <span class="text-sm text-gray-500 line-through">$799</span>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg hover-shadow animate-scaleIn" style="animation-delay: 0.2s;">
                    <img src="/api/placeholder/300/200" alt="Destino 2" class="object-cover w-full h-48 transition duration-500 transform hover:scale-105">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">París</h3>
                        <p class="mb-2 text-gray-600">Vuelo + 4 noches + tour por la ciudad</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$799</span>
                            <span class="text-sm text-gray-500 line-through">$999</span>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg hover-shadow animate-scaleIn" style="animation-delay: 0.4s;">
                    <img src="/api/placeholder/300/200" alt="Destino 3" class="object-cover w-full h-48 transition duration-500 transform hover:scale-105">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Tokio</h3>
                        <p class="mb-2 text-gray-600">Vuelo + 5 noches + excursión al Monte Fuji</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$1299</span>
                            <span class="text-sm text-gray-500 line-through">$1599</span>
                        </div>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg hover-shadow animate-scaleIn" style="animation-delay: 0.6s;">
                    <img src="/api/placeholder/300/200" alt="Destino 4" class="object-cover w-full h-48 transition duration-500 transform hover:scale-105">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Cancún</h3>
                        <p class="mb-2 text-gray-600">Todo incluido: vuelo + 7 noches de resort</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-green-600">$899</span>
                            <span class="text-sm text-gray-500 line-through">$1199</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 1s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Destinos populares</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-6">
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 1" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Londres</p>
                    <p class="text-green-600">Desde $399</p>
                </div>
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 2" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Roma</p>
                    <p class="text-green-600">Desde $449</p>
                </div>
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 3" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Sídney</p>
                    <p class="text-green-600">Desde $899</p>
                </div>
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 4" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Dubái</p>
                    <p class="text-green-600">Desde $599</p>
                </div>
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 5" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Bangkok</p>
                    <p class="text-green-600">Desde $549</p>
                </div>
                <div class="p-4 text-center transition duration-300 bg-white rounded-lg shadow hover-grow hover-shadow">
                    <img src="/api/placeholder/150/100" alt="Destino popular 6" class="object-cover w-full h-32 mb-2 transition duration-500 transform rounded hover:scale-105">
                    <p class="font-bold">Río de Janeiro</p>
                    <p class="text-green-600">Desde $649</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-8 text-white bg-blue-800 animate-fadeIn" style="animation-delay: 1.2s;">
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