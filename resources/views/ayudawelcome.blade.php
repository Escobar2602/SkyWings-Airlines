<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyWings Airlines - Centro de Ayuda</title>
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
        .animate-fadeIn { animation: fadeIn 0.5s ease-out; }
        .animate-slideInLeft { animation: slideInFromLeft 0.5s ease-out; }
        .animate-slideInRight { animation: slideInFromRight 0.5s ease-out; }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 shadow-lg animate-fadeIn">
        <nav class="container px-6 py-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-white animate-slideInLeft">SkyWings Airlines</div>
                <div class="flex-1 mx-4">
                    <form class="flex">
                        <input type="text" placeholder="Buscar en el centro de ayuda..." class="w-full px-2 py-1 transition duration-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <button type="submit" class="px-2 py-2 text-white transition duration-300 bg-blue-800 rounded-r-lg hover:bg-blue-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="flex items-center space-x-4 text-white animate-slideInRight">
                    <a href="#" class="transition duration-300 hover:text-blue-200"><i class="fas fa-home"></i></a>
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
                <a href="{{ url('/destinos') }}" class="transition duration-300 hover:text-blue-300">Destinos</a>
                <a href="{{ url('/Checkin') }}" class="transition duration-300 hover:text-blue-300">Check-in</a>
            </div>
            <div>
                
            </div>
        </div>
    </nav>

    <main class="container px-6 py-8 mx-auto">
        <h1 class="mb-8 text-3xl font-bold text-gray-800 animate-fadeIn">Centro de Ayuda</h1>
        
        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Preguntas frecuentes</h2>
            <div class="space-y-4">
                <div class="p-4 bg-white rounded-lg shadow">
                    <h3 class="mb-2 text-lg font-semibold">¿Cómo puedo cambiar mi reserva?</h3>
                    <p class="text-gray-600">Para cambiar su reserva, inicie sesión en su cuenta y vaya a la sección "Mis reservas". Allí encontrará opciones para modificar su vuelo.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <h3 class="mb-2 text-lg font-semibold">¿Cuál es la política de equipaje?</h3>
                    <p class="text-gray-600">Nuestra política de equipaje varía según el tipo de tarifa y destino. Generalmente, se permite una maleta de mano y una maleta facturada. Consulte los detalles específicos en la sección de equipaje.</p>
                </div>
                <div class="p-4 bg-white rounded-lg shadow">
                    <h3 class="mb-2 text-lg font-semibold">¿Cómo puedo hacer el check-in online?</h3>
                    <p class="text-gray-600">El check-in online está disponible desde 24 horas hasta 2 horas antes de su vuelo. Acceda a nuestra página web o app móvil y siga las instrucciones en la sección de check-in.</p>
                </div>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Categorías de ayuda</h2>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-plane"></i>
                    <h3 class="mb-2 text-xl font-semibold">Reservas y Check-in</h3>
                    <p class="text-gray-600">Información sobre cómo hacer, modificar o cancelar reservas, y proceso de check-in.</p>
                </a>
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-suitcase"></i>
                    <h3 class="mb-2 text-xl font-semibold">Equipaje</h3>
                    <p class="text-gray-600">Políticas de equipaje, restricciones y servicios adicionales.</p>
                </a>
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-passport"></i>
                    <h3 class="mb-2 text-xl font-semibold">Documentación y Visados</h3>
                    <p class="text-gray-600">Requisitos de documentación para viajar y información sobre visados.</p>
                </a>
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-users"></i>
                    <h3 class="mb-2 text-xl font-semibold">Servicios especiales</h3>
                    <p class="text-gray-600">Asistencia para pasajeros con necesidades especiales, menores no acompañados, etc.</p>
                </a>
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-credit-card"></i>
                    <h3 class="mb-2 text-xl font-semibold">Tarifas y pagos</h3>
                    <p class="text-gray-600">Información sobre tarifas, opciones de pago y reembolsos.</p>
                </a>
                <a href="#" class="p-6 transition duration-300 bg-white rounded-lg shadow hover:shadow-lg">
                    <i class="mb-4 text-4xl text-blue-500 fas fa-headset"></i>
                    <h3 class="mb-2 text-xl font-semibold">Contacto y reclamaciones</h3>
                    <p class="text-gray-600">Cómo contactarnos y proceso para gestionar reclamaciones.</p>
                </a>
            </div>
        </section>

        <section class="mb-12 animate-fadeIn">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">¿Necesita más ayuda?</h2>
            <div class="p-6 bg-white rounded-lg shadow">
                <p class="mb-4 text-gray-600">Si no ha encontrado la respuesta que buscaba, nuestro equipo de atención al cliente estará encantado de ayudarle.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="px-4 py-2 text-white transition duration-300 bg-blue-500 rounded hover:bg-blue-600">
                        <i class="mr-2 fas fa-comments"></i>Chat en vivo
                    </a>
                    <a href="#" class="px-4 py-2 text-white transition duration-300 bg-green-500 rounded hover:bg-green-600">
                        <i class="mr-2 fas fa-phone"></i>Llamar ahora
                    </a>
                    <a href="#" class="px-4 py-2 text-white transition duration-300 bg-purple-500 rounded hover:bg-purple-600">
                        <i class="mr-2 fas fa-envelope"></i>Enviar correo
                    </a>
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