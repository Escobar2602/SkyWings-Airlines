<x-app-layout>

    <body class="bg-gray-100">
        <div class="flex flex-col justify-center items-center">
            <!-- Image banner section -->
            <div class="relative w-full h-96 bg-cover bg-center"  style="background-image: url('{{ asset('images/614784_fastest_private_jet_banner_tcm71-45564.jpg') }}');">

                <!-- Form section -->
                <form class="relative mt-64 flex flex-col justify-center items-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                        <h2 class="text-lg font-semibold text-gray-700 mb-3 text-center">Vuelo</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            <div>
                                <label for="origin" class="block text-sm font-medium text-gray-700">Origen</label>
                                <input type="text" id="origin" name="origin" placeholder="Ciudad de origen" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="destination" class="block text-sm font-medium text-gray-700">Destino</label>
                                <input type="text" id="destination" name="destination" placeholder="Ciudad de destino" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>

                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700">Fecha</label>
                                <input type="date" id="date" name="date" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            </div>
                        </div>

                        <div class="flex justify-center mt-3">
                            <button type="submit" class="px-3 py-1.5 bg-purple-700 text-white rounded-lg hover:bg-purple-800 focus:outline-none">Buscar vuelo</button>
                        </div>
                    </div>
                </form>
            </div>

    </body>
    </html>

</x-app-layout>
