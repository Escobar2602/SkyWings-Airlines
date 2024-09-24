<div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
    <div id="sidebar-overlay" class="absolute inset-0 hidden transition-opacity duration-300 ease-in-out pointer-events-auto bg-gray-900/70"></div>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-16 h-screen transition-all duration-300 ease-in-out transform pointer-events-auto sm:translate-x-0"
        aria-label="Sidebar">
        <div class="flex flex-col h-full px-3 py-4 text-white bg-gradient-to-br from-indigo-900 to-purple-800">
            <div class="mb-6 ml-1">
                <div id="sidebar-logo" class="w-[50px] h-[50px] transition-all duration-300 rounded-full bg-white p-2">
                    <!-- Add your logo here -->
                </div>
            </div>

            <ul id="sidebar-menu" class="flex-grow space-y-4 font-medium">
                <li>
                    <a href="{{ url('/dashboard') }}" class="sidebar-link" data-title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>      
                    </a>
                </li>
                <li>
                    <a href="{{ route('aviones') }}" class="sidebar-link" data-title="Registro Aviones">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('rutas') }}" class="sidebar-link" data-title="Registro Rutas">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tickets.search') }}" class="sidebar-link" data-title="Comprar Ticket">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('personal.create') }}" class="sidebar-link" data-title="Crear Personal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aeropuertos.create') }}" class="sidebar-link" data-title="Crear aeropuertos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0v-9" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clientes.create') }}" class="sidebar-link" data-title="Crear cliente">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tripulacion.create') }}" class="sidebar-link" data-title="Crear Tripulación">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('vuelos.create') }}" class="sidebar-link" data-title="Crear Vuelo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('reservas.create') }}" class="sidebar-link" data-title="Crear reserva">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>

<!--- Toggle Button --->
<div class="fixed z-[10000] top-4 left-4">
    <input id="toggle-sidebar" type="checkbox" class="hidden peer">
    <label for="toggle-sidebar" class="flex flex-col items-center justify-center p-2 space-y-1 transition-colors duration-200 rounded-full cursor-pointer w-10 h-10 bg-indigo-900 hover:bg-indigo-800 shadow-lg">
        <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:rotate-45 peer-checked:translate-y-[5px]"></div>
        <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300 peer-checked:opacity-0"></div>
        <div class="w-5 h-0.5 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:-rotate-45 peer-checked:-translate-y-[5px]"></div>
    </label>
</div>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .float-animation {
        animation: float 3s ease-in-out infinite;
    }

    .sidebar-link {
        @apply flex items-center p-2 transition-all duration-200 rounded-lg hover:bg-indigo-700 group;
    }

    .sidebar-link span {
        @apply ml-3 transition-all duration-300 ease-in-out opacity-0 group-hover:opacity-100;
    }

    .sidebar-link:hover svg {
        @apply text-white transform scale-110;
    }

    .tooltip {
        @apply absolute left-full ml-2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 transition-opacity duration-200 pointer-events-none;
        white-space: nowrap;
    }

    .sidebar-link:hover .tooltip {
        @apply opacity-100;
    }

    #default-sidebar {
        @apply overflow-y-auto;
    }

    #sidebar-menu {
        @apply overflow-x-hidden;
    }
</style>

<script>
    const sidebar = document.getElementById('default-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const toggleButton = document.getElementById('toggle-sidebar');
    const menuItems = document.querySelectorAll('#sidebar-menu span');
    const sidebarLogo = document.getElementById('sidebar-logo');
    const sidebarLinks = document.querySelectorAll('.sidebar-link');

    function toggleSidebar() {
        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-16');
        sidebarOverlay.classList.toggle('hidden');

        if (sidebar.classList.contains('w-64')) {
            menuItems.forEach(item => {
                item.classList.remove('opacity-0');
                item.classList.remove('-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[50px]', 'h-[50px]');
            sidebarLogo.classList.add('w-[70px]', 'h-[70px]', 'float-animation');
        } else {
            menuItems.forEach(item => {
                item.classList.add('opacity-0');
                item.classList.add('-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[70px]', 'h-[70px]', 'float-animation');
            sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
        }
    }

    toggleButton.addEventListener('change', toggleSidebar);
    sidebarOverlay.addEventListener('click', () => {
        toggleButton.checked = false;
        toggleSidebar();
    });

    // Close sidebar on mobile when clicking a menu item
    sidebarLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 640 && sidebar.classList.contains('w-64')) {
                toggleButton.checked = false;
                toggleSidebar();
            }
        });
    });

    // Adjust sidebar on window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 640) {
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-16');
            sidebarOverlay.classList.add('hidden');
            menuItems.forEach(item => {
                item.classList.add('opacity-0');
                item.classList.add('-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[70px]', 'h-[70px]', 'float-animation');
            sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
            toggleButton.checked = false;
        }
    });

    // Add tooltip functionality
    sidebarLinks.forEach(link => {
        const title = link.getAttribute('data-title');
        if (title) {
            const tooltip = document.createElement('div');
            tooltip.textContent = title;
            tooltip.className = 'tooltip';
            link.appendChild(tooltip);

            link.addEventListener('mouseenter', () => {
                const rect = link.getBoundingClientRect();
                const sidebarRect = sidebar.getBoundingClientRect();
                
                if (rect.top + tooltip.offsetHeight > window.innerHeight) {
                    tooltip.style.top = 'auto';
                    tooltip.style.bottom = '0';
                } else {
                    tooltip.style.top = `${rect.top - sidebarRect.top}px`;
                    tooltip.style.bottom = 'auto';
                }
            });
        }
    });
</script>