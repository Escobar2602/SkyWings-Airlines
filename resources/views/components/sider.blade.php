<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Dashboard Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .sidebar {
            transition: all 0.3s ease-in-out;
        }

        .sidebar-link {
            transition: all 0.2s ease-in-out;
        }

        .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .tooltip {
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .sidebar-link:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
        <div id="sidebar-overlay" class="absolute inset-0 hidden transition-opacity duration-300 ease-in-out pointer-events-auto bg-gray-900/70"></div>

        <aside id="sidebar" class="sidebar fixed top-0 left-0 h-screen w-20 bg-gradient-to-b from-blue-800 via-blue-700 to-blue-900 text-white flex flex-col items-center py-6 z-50 overflow-x-hidden overflow-y-auto transition-all duration-300 ease-in-out transform pointer-events-auto">
            <div id="logo" class="mb-8 transition-all duration-300">
                <img src="/images/download-removebg-preview.png" alt="Logo" class="w-12 h-12 rounded-full">
            </div>
            <nav class="flex-1 space-y-2 w-full px-3">
                <a href="{{ url('/dashboard') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Dashboard">
                    <i class="fas fa-home text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Dashboard</span>
                </a>
                <a href="{{ route('aviones') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Registro Aviones">
                    <i class="fas fa-plane text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Registro Aviones</span>
                </a>
                <a href="{{ route('rutas') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Registro Rutas">
                    <i class="fas fa-route text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Registro Rutas</span>
                </a>
                <a href="{{ route('tickets.search') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Comprar Ticket">
                    <i class="fas fa-ticket-alt text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Comprar Ticket</span>
                </a>
                <a href="{{ route('personal.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Personal">
                    <i class="fas fa-user-plus text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Personal</span>
                </a>
                <a href="{{ route('aeropuertos.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Aeropuertos">
                    <i class="fas fa-building text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Aeropuertos</span>
                </a>
                <a href="{{ route('clientes.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Cliente">
                    <i class="fas fa-user-tie text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Cliente</span>
                </a>
                <a href="{{ route('tripulacion.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Tripulación">
                    <i class="fas fa-users-cog text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Tripulación</span>
                </a>
                <a href="{{ route('vuelos.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Vuelo">
                    <i class="fas fa-plane-departure text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Vuelo</span>
                </a>
                <a href="{{ route('reservas.create') }}" class="sidebar-link flex items-center justify-center w-full h-12 rounded-lg relative group" data-title="Crear Reserva">
                    <i class="fas fa-calendar-plus text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Crear Reserva</span>
                </a>
            </nav>
            <div class="mt-auto">
                <a href="{{ route('soporte') }}" class="sidebar-link flex items-center justify-center w-12 h-12 rounded-lg relative group" data-title="Settings">
                    <i class="fas fa-cog text-xl"></i>
                    <span class="ml-4 text-sm font-medium hidden">Settings</span>
                </a>
            </div>
        </aside>
    </div>

    <div class="fixed z-[10000] top-4 left-4">
        <button id="toggle-sidebar" class="flex flex-col items-center justify-center p-2 space-y-1 transition-colors duration-200 rounded-full cursor-pointer w-10 h-10 bg-blue-800 hover:bg-blue-700 shadow-lg">
            <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300 origin-right"></div>
            <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300"></div>
            <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300 origin-right"></div>
        </button>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const toggleButton = document.getElementById('toggle-sidebar');
        const logo = document.getElementById('logo');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        let isExpanded = false;

        function toggleSidebar() {
            isExpanded = !isExpanded;
            sidebar.style.width = isExpanded ? '240px' : '80px';
            sidebarOverlay.classList.toggle('hidden');
            
            logo.style.transform = isExpanded ? 'scale(1.2)' : 'scale(1)';
            logo.classList.toggle('float-animation', isExpanded);
            
            sidebarLinks.forEach(link => {
                const text = link.querySelector('span:not(.tooltip)');
                if (isExpanded) {
                    link.style.justifyContent = 'flex-start';
                    link.style.paddingLeft = '1.5rem';
                    text.classList.remove('hidden');
                } else {
                    link.style.justifyContent = 'center';
                    link.style.paddingLeft = '0';
                    text.classList.add('hidden');
                }
            });

            // Toggle button animation
            toggleButton.classList.toggle('active');
            const bars = toggleButton.querySelectorAll('div');
            bars[0].classList.toggle('rotate-45');
            bars[0].classList.toggle('translate-y-[5px]');
            bars[1].classList.toggle('opacity-0');
            bars[2].classList.toggle('-rotate-45');
            bars[2].classList.toggle('-translate-y-[5px]');
        }

        toggleButton.addEventListener('click', toggleSidebar);
        sidebarOverlay.addEventListener('click', toggleSidebar);

        // Add active class to clicked link
        sidebarLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                sidebarLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
                if (window.innerWidth < 640 && isExpanded) {
                    toggleSidebar();
                }
            });

            // Add tooltip
            const title = link.getAttribute('data-title');
            if (title) {
                const tooltip = document.createElement('div');
                tooltip.textContent = title;
                tooltip.className = 'tooltip absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 transition-opacity duration-200 pointer-events-none whitespace-nowrap';
                link.appendChild(tooltip);
            }
        });

        // Adjust sidebar on window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 640 && isExpanded) {
                toggleSidebar();
            }
        });
    </script>
</body>
</html>