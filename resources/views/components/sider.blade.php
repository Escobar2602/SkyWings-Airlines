
    <div id="sidebar-container" class="fixed inset-0 pointer-events-none z-[9999]">
        <div id="sidebar-overlay" class="absolute inset-0 hidden bg-black opacity-50 pointer-events-auto"></div>

        <aside id="default-sidebar"
            class="fixed top-0 left-0 w-16 h-screen transition-all duration-300 ease-in-out pointer-events-auto sm:translate-x-0"
            aria-label="Sidebar">
            <div class="flex flex-col h-full px-3 py-4 bg-gradient-to-br from-[#0F293E] to-blue-950">
                <div class="mb-4 ml-16">
                    <img id="sidebar-logo" src="{{ asset('/images/globo-terraqueo-con-mapas-de-continentes.png') }}"
                        alt="Camg" class="w-[70px] h-[70px] transition-all duration-300">
                </div>

                <ul id="sidebar-menu" class="flex-grow space-y-2 font-medium">
                    <li>
                        <a href="{{ url('/dashboard') }}" onclick="dashboard()"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                            <div class="flex-shrink-0 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                                </svg>
                            </div>
                            <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">ESTADISTICA</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('aviones') }}" onclick="aviones()"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                            <div class="flex-shrink-0 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </div>
                            <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">EVENTO</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rutas') }}" onclick="rutas()"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-[#5989d1] group">
                            <div class="flex-shrink-0 w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                            </div>
                            <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">CALENDARIO</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('tiket') }}" onclick="tiket()"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                            <div class="flex-shrink-0 w-6 h-6">
                            <svg class="h-8 w-8 text-gray-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
</svg>

                            </div>
                            <span class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">REPORTE</span>
                        </a>
                    </li>

                </ul>

                <div id="sidebar" class="mt-auto">
                    <ul class="nav-links">
                        <li>
                            <a href="{{ route('soporte') }}" onclick="soporte()"
                                class="flex items-center p-2 text-white rounded-lg hover:bg-[#bbbaba] group">
                                <div class="flex-shrink-0 w-6 h-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                    </svg>
                                </div>
                                <span id="soporte-texto"
                                    class="flex-1 transition-opacity duration-300 ease-in-out transform opacity-0 ms-3 whitespace-nowrap">SOPORTE</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </aside>
    </div>

    <div class="fixed z-[10000] top-4 left-4">
        <input id="toggle-sidebar" type="checkbox" class="hidden peer">
        <label for="toggle-sidebar" class="flex flex-col items-center justify-center space-y-1 cursor-pointer w-7 h-7">
            <!-- Línea 1 -->
            <div
                class="w-1/2 h-1 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:w-full peer-checked:rotate-[-30deg] peer-checked:translate-y-[-4px]">
            </div>
            <!-- Línea 2 -->
            <div
                class="w-full h-1 transition-all duration-300 origin-center bg-blue-400 rounded-lg peer-checked:rotate-90 peer-checked:translate-x-2">
            </div>
            <!-- Línea 3 -->
            <div
                class="w-1/2 h-1 bg-white rounded-lg transition-all duration-300 origin-right peer-checked:w-full peer-checked:rotate-[30deg] peer-checked:translate-y-[4px]">
            </div>
        </label>
    </div>
@endrole
<script>
    const sidebar = document.getElementById('default-sidebar');
    const sidebarMenu = document.getElementById('sidebar-menu');
    const sidebarLogo = document.getElementById('sidebar-logo');
    const toggleButton = document.getElementById('toggle-sidebar');
    const toggleIcon = document.getElementById('toggle-icon');
    const menuItems = document.querySelectorAll('#sidebar-menu span');
    const bottomImageContainer = document.getElementById('bottom-image-container');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-16');

        if (sidebar.classList.contains('w-16')) {
            menuItems.forEach(item => {
                item.classList.add('opacity-0', '-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[70px]', 'h-[70px]');
            sidebarLogo.classList.add('w-[50px]', 'h-[50px]');
            bottomImageContainer.style.transform = 'translateX(0)';
            toggleIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>';
        } else {
            menuItems.forEach(item => {
                item.classList.remove('opacity-0', '-translate-x-2.5');
            });
            sidebarLogo.classList.remove('w-[50px]', 'h-[50px]');
            sidebarLogo.classList.add('w-[70px]', 'h-[70px]');
            bottomImageContainer.style.transform = 'translateX(12rem)';
            toggleIcon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>';
        }
    });
</script>
