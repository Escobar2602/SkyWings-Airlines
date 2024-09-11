<x-app-layout>
    <body class="bg-gray-100">
        <div class="flex flex-col justify-center items-center">
            <!-- Form section -->
            <form class="relative mt-64 flex flex-col justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-semibold text-gray-700 mb-3 text-center">Crea ruta Vuelo</h2>
                    <div class="grid grid-cols-1 md:grid-cols-6 gap-3">
                        <div>
                            <label for="origin" class="block text-sm font-medium text-gray-700">Origen</label>
                            <select id="origin" name="origin" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                                <!-- Add options here -->
                                <option value="">Seleccione ciudad de origen</option>
                                <option value="ciudad1" id="origen-villazon">Villazón</option>
                                <option value="ciudad2" id="origen-caranavi">Caranavi</option>
                                <option value="ciudad3" id="origen-trinidad">Trinidad</option>
                                <option value="ciudad4" id="origen-santa-cruz">Santa Cruz</option>
                                <option value="ciudad5" id="origen-la-paz">La Paz</option>
                                <option value="ciudad6" id="origen-cocachamba">Cochabamba</option>
                                <option value="ciudad7" id="origen-venezuela">Venezuela</option>
                                <option value="ciudad8" id="origen-colombia">Colombia</option>
                                <option value="ciudad9" id="origen-miami">Miami</option>
                                <option value="ciudad10" id="origen-peru">Perú</option>
                                <option value="ciudad11" id="origen-brazil">Brasil</option>
                                <option value="ciudad12" id="origen-paraguay">Paraguay</option>
                            </select>
                        </div>

                        <div>
                            <label for="destination" class="block text-sm font-medium text-gray-700">Destino</label>
                            <select id="destination" name="destination" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                                <option value="">Seleccione ciudad de destino</option>
                                <option value="ciudad1" id="destino-villazon">Villazón</option>
                                <option value="ciudad2" id="destino-caranavi">Caranavi</option>
                                <option value="ciudad3" id="destino-trinidad">Trinidad</option>
                                <option value="ciudad4" id="destino-santa-cruz">Santa Cruz</option>
                                <option value="ciudad5" id="destino-la-paz">La Paz</option>
                                <option value="ciudad6" id="destino-cocachamba">Cochabamba</option>
                                <option value="ciudad7" id="destino-venezuela">Venezuela</option>
                                <option value="ciudad8" id="destino-colombia">Colombia</option>
                                <option value="ciudad9" id="destino-miami">Miami</option>
                                <option value="ciudad10" id="destino-peru">Perú</option>
                                <option value="ciudad11" id="destino-brazil">Brasil</option>
                                <option value="ciudad12" id="destino-paraguay">Paraguay</option>
                            </select>
                        </div>

                        <div>
                            <label for="arrival_time" class="block text-sm font-medium text-gray-700">Hora de Salida</label>
                            <input type="time" id="arrival_time1" name="arrival_time1" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        </div>

                        <div>
                            <label for="arrival_time" class="block text-sm font-medium text-gray-700">Hora de llegada</label>
                            <input type="time" id="arrival_time2" name="arrival_time2" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        </div>

                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Dia de salida</label>
                            <input type="date" id="date" name="date" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">

                        </div>


                        <div>
                            <label for="value" class="block text-sm font-medium text-gray-700">Valor</label>
                            <input type="number" id="value" name="value" placeholder="Valor del vuelo" class="mt-1 block w-full p-1.5 border border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        </div>
                    </div>

                    <div class="flex justify-center mt-3">
                        <button type="submit" class="px-3 py-1.5 bg-purple-700 text-white rounded-lg hover:bg-purple-800 focus:outline-none">Crear ruta de vuelo</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            const originSelect = document.getElementById('origin');
            const destinationSelect = document.getElementById('destination');

            function disableSelectedOption(selectedValue, selectElement) {
                const options = selectElement.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].value === selectedValue) {
                        options[i].disabled = true;
                    } else {
                        options[i].disabled = false;
                    }
                }
            }

            originSelect.addEventListener('change', function () {
                const selectedOrigin = this.value;
                disableSelectedOption(selectedOrigin, destinationSelect);
            });

            destinationSelect.addEventListener('change', function () {
                const selectedDestination = this.value;
                disableSelectedOption(selectedDestination, originSelect);
            });
        </script>
    </body>
</x-app-layout>
