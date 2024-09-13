<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="mx-auto center max-w-7xl sm:px-6 lg:px-8">

            <div class="flex justify-center space-x-8"> <!-- Flex container with space between the components -->
                <!-- Primer componente -->
                <div class="relative flex justify-center h-[600px] w-[300px] border border-4 border-black rounded-3xl bg-gray-50"
                    style="box-shadow: 8px 8px 15px 6px rgb(200, 210, 210)">
                    <div>
                        <br>
                        <div
                            class="duration-300 font-mono text-white group cursor-pointer relative overflow-hidden bg-[#DCDFE4] w-36 h-56 dark:bg-[#22272B] rounded-3xl p-4 hover:w-64 hover:bg-blue-300 hover:dark:bg-[#0C66E4]">
                            <h3 class="mb-4 text-2xl text-center">Today</h3>
                            <div class="relative gap-4">
                                <svg viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns="http://www.w3.org/2000/svg" class="w-24 scale-[120%] mx-auto">
                                    <defs>
                                        <linearGradient gradientUnits="userSpaceOnUse" y2="28.33" y1="19.67"
                                            x2="21.5" x1="16.5" id="b">
                                            <stop stop-color="#fbbf24" offset="0"></stop>
                                            <stop stop-color="#fbbf24" offset=".45"></stop>
                                            <stop stop-color="#f59e0b" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient gradientUnits="userSpaceOnUse" y2="50.8" y1="21.96"
                                            x2="39.2" x1="22.56" id="c">
                                            <stop stop-color="#f3f7fe" offset="0"></stop>
                                            <stop stop-color="#f3f7fe" offset=".45"></stop>
                                            <stop stop-color="#deeafb" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient gradientUnits="userSpaceOnUse" y2="48.05" y1="42.95"
                                            x2="25.47" x1="22.53" id="a">
                                            <stop stop-color="#4286ee" offset="0"></stop>
                                            <stop stop-color="#4286ee" offset=".45"></stop>
                                            <stop stop-color="#0950bc" offset="1"></stop>
                                        </linearGradient>
                                        <linearGradient xlink:href="#a" y2="48.05" y1="42.95" x2="32.47"
                                            x1="29.53" id="d"></linearGradient>
                                        <linearGradient xlink:href="#a" y2="48.05" y1="42.95" x2="39.47"
                                            x1="36.53" id="e"></linearGradient>
                                    </defs>
                                    <circle stroke-width=".5" stroke-miterlimit="10" stroke="#f8af18" fill="url(#b)"
                                        r="5" cy="24" cx="19"></circle>
                                    <path
                                        d="M19 15.67V12.5m0 23v-3.17m5.89-14.22l2.24-2.24M10.87 32.13l2.24-2.24m0-11.78l-2.24-2.24m16.26 16.26l-2.24-2.24M7.5 24h3.17m19.83 0h-3.17"
                                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke="#fbbf24"
                                        fill="none">
                                        <animateTransform values="0 19 24; 360 19 24" type="rotate"
                                            repeatCount="indefinite" dur="45s" attributeName="transform">
                                        </animateTransform>
                                    </path>
                                    <path
                                        d="M46.5 31.5h-.32a10.49 10.49 0 00-19.11-8 7 7 0 00-10.57 6 7.21 7.21 0 00.1 1.14A7.5 7.5 0 0018 45.5a4.19 4.19 0 00.5 0v0h28a7 7 0 000-14z"
                                        stroke-width=".5" stroke-miterlimit="10" stroke="#e6effc" fill="url(#c)"></path>
                                    <path d="M24.39 43.03l-.78 4.94" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke="url(#a)" fill="none">
                                        <animateTransform values="1 -5; -2 10" type="translate" repeatCount="indefinite"
                                            dur="0.7s" attributeName="transform"></animateTransform>
                                    </path>
                                    <path d="M31.39 43.03l-.78 4.94" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke="url(#d)" fill="none">
                                        <animateTransform values="1 -5; -2 10" type="translate" repeatCount="indefinite"
                                            dur="0.7s" begin="-0.4s" attributeName="transform">
                                        </animateTransform>
                                    </path>
                                    <path d="M38.39 43.03l-.78 4.94" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke="url(#e)" fill="none">
                                        <animateTransform values="1 -5; -2 10" type="translate"
                                            repeatCount="indefinite" dur="0.7s" begin="-0.2s"
                                            attributeName="transform"></animateTransform>
                                    </path>
                                </svg>
                                <h4
                                    class="absolute font-sans text-6xl text-center duration-300 -translate-x-1/2 left-1/2 group-hover:translate-x-8 group-hover:-translate-y-16 group-hover:scale-150">
                                    6°
                                </h4>
                            </div>
                            <div class="absolute mt-2 duration-300 -left-32 group-hover:left-10">
                                <p class="text-sm">Bolivia</p>
                                <p class="text-sm">50% </p>
                            </div>
                        </div>
                        <span class="h-2 bg-black border border-black w-28 rounded-br-xl rounded-bl-xl"></span>
                        <span class="absolute border border-4 border-black rounded-md -right-2 top-14 h-7"></span>
                        <span class="absolute h-10 border border-4 border-black rounded-md -right-2 bottom-36"></span>
                    </div>
                </div>

                <!-- Segundo componente -->
                <div class="relative flex justify-center h-[600px] w-[300px] border border-4 border-black rounded-3xl bg-gray-50"
                    style="box-shadow: 8px 8px 15px 6px rgb(200, 210, 210)">
                    <div>
                        <br>

                        <div
                            class="group hover:-rotate-0 [transform:rotate3d(1_,-1,_1,_15deg)] duration-500 overflow-hidden bg-gradient-to-bl from-sky-400 via-sky-500 to-sky-700 p-6 rounded-lg hover:shadow-lg [box-shadow:12px_12px_0px_0px_#0d0d0d] backdrop-filter backdrop-blur-md border border-neutral-600">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-2xl font-bold text-white">City Name</h2>
                                    <p class="text-neutral-800">Sunny</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="48px" height="48px"
                                    viewBox="0 0 24 24" fill="none"
                                    class="absolute w-12 h-12 -top-2 -right-2 stroke-yellow-300">
                                    <path
                                        d="M12 3V4M12 20V21M4 12H3M6.31412 6.31412L5.5 5.5M17.6859 6.31412L18.5 5.5M6.31412 17.69L5.5 18.5001M17.6859 17.69L18.5 18.5001M21 12H20M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z"
                                        stroke="" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="mt-4">
                                <p class="text-4xl font-bold text-white">22°C</p>
                                <div class="flex items-center justify-between gap-1">
                                    <span class="mr-2 text-neutral-800">Feels Like</span>
                                    <span class="text-white">20°C</span>
                                </div>
                                <div class="flex items-center justify-between gap-1">
                                    <span class="text-neutral-800">Wind</span>
                                    <span class="text-white">10 km/h</span>
                                </div>
                                <div class="flex items-center justify-between gap-1">
                                    <span class="text-neutral-800">Humidity</span>
                                    <span class="text-white">75%</span>
                                </div>
                            </div>
                        </div>

                        <span class="h-2 bg-black border border-black w-28 rounded-br-xl rounded-bl-xl"></span>
                        <span class="absolute border border-4 border-black rounded-md -right-2 top-14 h-7"></span>
                        <span class="absolute h-10 border border-4 border-black rounded-md -right-2 bottom-36"></span>
                    </div>
                </div>

                <!-- Tercer componente -->
                <div class="relative flex justify-center h-[600px] w-[300px] border border-4 border-black rounded-3xl bg-gray-50"
                    style="box-shadow: 8px 8px 15px 6px rgb(200, 210, 210)">
                    <div>
                        <br>
                        <div
                            class="w-[250px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group">
                            <div
                                class="flex flex-col items-center w-full p-4 text-gray-100 bg-gray-900 rounded-md sm:px-8">
                                <div class="text-center">
                                    <h2 class="text-lg font-semibold">Dubai</h2>
                                    <p class="text-sm text-gray-400">March 13</p>
                                </div>
                                <svg class="w-24 h-24 p-4 text-yellow-400 fill-current animate-[spin_5s_linear_infinite;]"
                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z">
                                    </path>
                                    <rect class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]" y="16"
                                        x="240" height="48" width="32"></rect>
                                    <rect class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]" y="448"
                                        x="240" height="48" width="32"></rect>
                                    <rect class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]" y="240"
                                        x="448" height="32" width="48"></rect>
                                    <rect class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]" y="240"
                                        x="16" height="32" width="48"></rect>
                                    <rect class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                                        transform="rotate(-45 416 416)" y="393.373" x="400" height="45.255"
                                        width="32"></rect>
                                    <rect class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                                        transform="rotate(-45 96 96)" y="73.373" x="80" height="45.255"
                                        width="32.001"></rect>
                                    <rect class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                                        transform="rotate(-45.001 96.002 416.003)" y="400" x="73.373" height="32"
                                        width="45.255"></rect>
                                    <rect class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                                        transform="rotate(-45 416 96)" y="80" x="393.373" height="32.001"
                                        width="45.255"></rect>
                                </svg>
                                <div class="mb-2 text-2xl font-semibold">
                                    27° <span class="mx-1 font-normal">/</span>19°
                                </div>
                                <p class="text-gray-400">Sunny</p>
                            </div>
                        </div>

                        <span class="h-2 bg-black border border-black w-28 rounded-br-xl rounded-bl-xl"></span>
                        <span class="absolute border border-4 border-black rounded-md -right-2 top-14 h-7"></span>
                        <span class="absolute h-10 border border-4 border-black rounded-md -right-2 bottom-36"></span>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
