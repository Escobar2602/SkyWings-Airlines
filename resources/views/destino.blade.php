<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings Airlines - Destinos</title>
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
                        <input type="text" placeholder="Buscar destinos..." class="w-full px-2 py-1 transition duration-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
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
                <a href="{{ url('/reseervas') }}" class="transition duration-300 hover:text-blue-300">Reservas</a>
                <a href="{{ url('/Checkin') }}" class="transition duration-300 hover:text-blue-300">Check-in</a>
            </div>
            <div>
            <a href="{{ url('/ayudawelcome') }}" class="transition duration-300 hover:text-blue-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container px-6 py-8 mx-auto">
        <h1 class="mb-8 text-3xl font-bold text-gray-800 animate-fadeIn">Descubre nuestros destinos</h1>
        
        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Destinos populares</h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/paris.jpg" alt="París" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">París, Francia</h3>
                        <p class="mb-4 text-gray-600">Descubre la Ciudad de la Luz, con su icónica Torre Eiffel y su famosa gastronomía.</p>
                        <a href="#" class="inline-block px-4 py-2 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Explorar París</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/tokio.jpg" alt="Tokio" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">Tokio, Japón</h3>
                        <p class="mb-4 text-gray-600">Sumérgete en la fascinante mezcla de tradición y modernidad de la capital japonesa.</p>
                        <a href="#" class="inline-block px-4 py-2 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Explorar Tokio</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Nueva York.jpg" alt="Nueva York" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-xl font-bold">Nueva York, EE. UU.</h3>
                        <p class="mb-4 text-gray-600">Vive la energía de la Gran Manzana, con sus rascacielos y su vibrante cultura.</p>
                        <a href="#" class="inline-block px-4 py-2 font-bold text-white transition duration-300 bg-blue-600 rounded hover:bg-blue-700">Explorar Nueva York</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Explora por continente</h2>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-globe-europe"></i>
                    <p class="font-bold">Europa</p>
                </a>
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-globe-americas"></i>
                    <p class="font-bold">América</p>
                </a>
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-globe-asia"></i>
                    <p class="font-bold">Asia</p>
                </a>
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-globe-africa"></i>
                    <p class="font-bold">África</p>
                </a>
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-globe-oceania"></i>
                    <p class="font-bold">Oceanía</p>
                </a>
                <a href="#" class="block p-4 text-center transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-2 text-4xl text-blue-500 fas fa-mountain"></i>
                    <p class="font-bold">Antártida</p>
                </a>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Destinos en tendencia</h2>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Dubái.jpg" alt="Dubái" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Dubái, EAU</h3>
                        <p class="mb-2 text-sm text-gray-600">Lujo, arquitectura futurista y compras</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Bali.jpg" alt="Bali" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Bali, Indonesia</h3>
                        <p class="mb-2 text-sm text-gray-600">Playas paradisíacas y cultura única</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Santorini.jpg" alt="Santorini" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Santorini, Grecia</h3>
                        <p class="mb-2 text-sm text-gray-600">Vistas impresionantes y romanticismo</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                    <img src="/images/Río de Janeiro.jpg" alt="Río de Janeiro" class="object-cover w-full h-48">
                    <div class="p-4">
                        <h3 class="mb-2 text-lg font-bold">Río de Janeiro, Brasil</h3>
                        <p class="mb-2 text-sm text-gray-600">Playas, carnaval y Cristo Redentor</p>
                        <a href="#" class="text-blue-600 hover:underline">Ver ofertas</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-6 mb-12 bg-white rounded-lg shadow-lg animate-fadeIn">
            <h2 class="mb-4 text-2xl font-bold text-gray-800">Inspiración para tu próximo viaje</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <h3 class="mb-2 text-xl font-bold">Top 5 ciudades para amantes de la gastronomía</h3>
                    <ul class="pl-5 mb-4 list-disc">
                        <li>Lyon, Francia</li>
                        <li>Tokio, Japón</li>
                        <li>Ciudad de México, México</li>
                        <li>Bolonia, Italia</li>
                        <li>Bangkok, Tailandia</li>
                    </ul>
                    <a href="#" class="text-blue-600 hover:underline">Leer más sobre destinos gastronómicos</a>
                </div>
                <div>
                    <h3 class="mb-2 text-xl font-bold">Destinos para aventureros</h3>
                    <ul class="pl-5 mb-4 list-disc">
                        <li>Machu Picchu, Perú</li>
                        <li>Islandia</li>
                        <li>Costa Rica</li>
                        <li>Queenstown, Nueva Zelanda</li>
                        <li>Patagonia, Argentina/Chile</li>
                    </ul>
                    <a href="#" class="text-blue-600 hover:underline">Descubre más destinos de aventura</a>
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