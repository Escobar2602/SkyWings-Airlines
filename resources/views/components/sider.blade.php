<!--- Sidebar Container --->
<div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
    <div id="sidebar-overlay" class="absolute inset-0 hidden bg-black/50 pointer-events-auto transition-opacity duration-300 ease-in-out"></div>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-16 h-screen transition-all duration-300 ease-in-out transform pointer-events-auto sm:translate-x-0"
        aria-label="Sidebar">
        <div class="flex flex-col h-full px-3 py-4 bg-gradient-to-br from-[#0F293E] to-blue-950 text-white">
            <BR></BR><div class="mb-6 ml-1">
                <img id="sidebar-logo" src="{{ asset('/logo/motor.png') }}" 
                    alt="Camg" class="w-[50px] h-[50px] transition-all duration-300">
            </div>

            <ul id="sidebar-menu" class="flex-grow space-y-4 font-medium">
                <li>
                    <a href="{{ url('/dashboard') }}" onclick="dashboard()"
                        class="flex items-center p-2 rounded-lg hover:bg-[#5989d1] transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="ml-3 opacity-0 transition-opacity duration-300 ease-in-out">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aviones') }}" onclick="aviones()"
                        class="flex items-center p-2 rounded-lg hover:bg-[#5989d1] transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        <span class="ml-3 opacity-0 transition-opacity duration-300 ease-in-out">R. Aviones</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('rutas') }}" onclick="rutas()"
                        class="flex items-center p-2 rounded-lg hover:bg-[#5989d1] transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                        <span class="ml-3 opacity-0 transition-opacity duration-300 ease-in-out">R. Rutas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tiket') }}" onclick="tiket()"
                        class="flex items-center p-2 rounded-lg hover:bg-[#5989d1] transition-colors duration-200 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                        <span class="ml-3 opacity-0 transition-opacity duration-300 ease-in-out">C. Tiket</span>
                    </a>
                </li>
            </ul>

            <div class="mt-auto">
                <a href="{{ route('soporte') }}" onclick="soporte()"
                    class="flex items-center p-2 rounded-lg hover:bg-[#5989d1] transition-colors duration-200 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span id="soporte-texto" class="ml-3 opacity-0 transition-opacity duration-300 ease-in-out">Soporte</span>
                </a>
            </div>
        </div>
    </aside>
</div>

<!--- Toggle Button --->
<div class="fixed z-[10000] top-4 left-4">
    <input id="toggle-sidebar" type="checkbox" class="hidden peer">
    <label for="toggle-sidebar" class="flex flex-col items-center justify-center space-y-1 cursor-pointer w-7 h-7 bg-[#5989d1] rounded-md p-1 hover:bg-blue-600 transition-colors duration-200">
        <div class="w-full h-0.5 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:rotate-45 peer-checked:translate-y-[5px]"></div>
        <div class="w-full h-0.5 bg-white rounded-lg transition-all duration-300 peer-checked:opacity-0"></div>
        <div class="w-full h-0.5 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:-rotate-45 peer-checked:-translate-y-[5px]"></div>
    </label>
</div>

<script>
    const sidebar = document.getElementById('default-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const toggleButton = document.getElementById('toggle-sidebar');
    const menuItems = document.querySelectorAll('#sidebar-menu span, #soporte-texto');
    const sidebarLogo = document.getElementById('sidebar-logo');

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
            sidebarLogo.classList.add('w-[70px]', 'h-[70px]');
        } else {
            menuItems.forEach(item => {
                item.classList.add('opacity-0');
                item.classList.add('-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[70px]', 'h-[70px]');
            sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
        }
    }

    toggleButton.addEventListener('change', toggleSidebar);
    sidebarOverlay.addEventListener('click', () => {
        toggleButton.checked = false;
        toggleSidebar();
    });

    // Close sidebar on mobile when clicking a menu item
    menuItems.forEach(item => {
        item.closest('a').addEventListener('click', () => {
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
            sidebarLogo.classList.remove('w-[70px]', 'h-[70px]');
            sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
            toggleButton.checked = false;
        }
    });
</script>