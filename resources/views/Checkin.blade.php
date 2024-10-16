<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings Airlines - Check-in Online</title>
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
                     
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-plane"></i></a>
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-user-circle"></i></a>
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <nav class="py-2 text-white bg-blue-800 animate-fadeIn" style="animation-delay: 0.2s;">
        <div class="container flex justify-between px-6 mx-auto">
            <div class="flex space-x-4">
                <a href="{{ url('/') }}" class="transition duration-300 hover:text-blue-300">Inicio</a>
                <a href="{{ url('/reseervas') }}" class="transition duration-300 hover:text-blue-300">Reservas</a>
                <a href="{{ url('/destinos') }}" class="transition duration-300 hover:text-blue-300">Destinos</a>
            </div>
            <div>
            <a href="{{ url('/ayudawelcome') }}" class="transition duration-300 hover:text-blue-300">Ayuda</a>
            </div>
        </div>
    </nav>

    <main class="container px-6 py-8 mx-auto">
        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.4s;">
            <h1 class="mb-6 text-3xl font-bold text-gray-800">Check-in Online</h1>
            <div class="p-6 bg-white rounded-lg shadow-lg hover-shadow animate-scaleIn">
                <form>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="reserva" class="block mb-2 text-sm font-bold text-gray-700">Número de reserva</label>
                            <input type="text" id="reserva" name="reserva" placeholder="Ej: ABC123" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        </div>
                        <div>
                            <label for="apellido" class="block mb-2 text-sm font-bold text-gray-700">Apellido</label>
                            <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 text-white transition duration-300 bg-blue-600 rounded-lg hover:bg-blue-700">
                            Iniciar Check-in
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.6s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Proceso de Check-in</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="p-4 text-center bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-search"></i>
                    <h3 class="mb-2 text-lg font-bold">1. Busca tu reserva</h3>
                    <p class="text-gray-600">Ingresa tu número de reserva y apellido</p>
                </div>
                <div class="p-4 text-center bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-4 text-4xl text-green-500 fas fa-user-check"></i>
                    <h3 class="mb-2 text-lg font-bold">2. Confirma tus datos</h3>
                    <p class="text-gray-600">Verifica tu información personal y de vuelo</p>
                </div>
                <div class="p-4 text-center bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-4 text-4xl text-yellow-500 fas fa-chair"></i>
                    <h3 class="mb-2 text-lg font-bold">3. Elige tu asiento</h3>
                    <p class="text-gray-600">Selecciona tu asiento preferido en el avión</p>
                </div>
                <div class="p-4 text-center bg-white rounded-lg shadow hover-grow hover-shadow">
                    <i class="mb-4 text-4xl text-red-500 fas fa-qrcode"></i>
                    <h3 class="mb-2 text-lg font-bold">4. Obtén tu tarjeta de embarque</h3>
                    <p class="text-gray-600">Descarga o imprime tu tarjeta de embarque</p>
                </div>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn" style="animation-delay: 0.8s;">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Preguntas frecuentes</h2>
            <div class="space-y-4">
                <div class="p-4 bg-white rounded-lg shadow hover-shadow">
                    <h3 class="mb-2 text-lg font-bold">¿Cuándo puedo hacer el check-in online?</h3>
                    <p class="text-gray-600">El check-in online está disponible desde 24 horas hasta 2 horas antes de la salida de tu vuelo.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow hover-shadow">
                    <h3 class="mb-2 text-lg font-bold">¿Necesito imprimir mi tarjeta de embarque?</h3>
                    <p class="text-gray-600">No es necesario. Puedes mostrar tu tarjeta de embarque digital en tu smartphone o tablet.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow hover-shadow">
                    <h3 class="mb-2 text-lg font-bold">¿Puedo hacer el check-in de mi equipaje online?</h3>
                    <p class="text-gray-600">El check-in online es solo para pasajeros con equipaje de mano. Si tienes equipaje para facturar, deberás hacerlo en el aeropuerto.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-8 text-white bg-blue-800 animate-fadeIn" style="animation-delay: 1s;">
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
                    <h3 class="mb-4 text-lg font-bold">Contacto</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Centro de ayuda</a></li>
                        <li><a href="#" class="hover:text-blue-300">Contacto</a></li>
                        <li><a href="#" class="hover:text-blue-300">Oficinas de venta</a></li>
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