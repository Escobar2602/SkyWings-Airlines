<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Ruta y Tarifa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
               
                
                <form action="{{ route('rutasytarifas.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="ciudad_origen" class="block text-sm font-medium text-gray-700">Ciudad Origen</label>
                            <select id="ciudad_origen" name="ciudad_origen" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Seleccione ciudad de origen</option>
                                @foreach(['Villazón', 'Caranavi', 'Trinidad', 'Santa Cruz', 'La Paz', 'Cochabamba', 'Venezuela', 'Colombia', 'Miami', 'Perú', 'Brasil', 'Paraguay'] as $ciudad)
                                    <option value="{{ $ciudad }}">{{ $ciudad }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="ciudad_destino" class="block text-sm font-medium text-gray-700">Ciudad Destino</label>
                            <select id="ciudad_destino" name="ciudad_destino" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Seleccione ciudad de destino</option>
                                @foreach(['Villazón', 'Caranavi', 'Trinidad', 'Santa Cruz', 'La Paz', 'Cochabamba', 'Venezuela', 'Colombia', 'Miami', 'Perú', 'Brasil', 'Paraguay'] as $ciudad)
                                    <option value="{{ $ciudad }}">{{ $ciudad }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                            <input type="number" step="0.01" id="precio" name="precio" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Ej. 100.00">
                        </div>

                        <div>
                            <label for="duracion" class="block text-sm font-medium text-gray-700">Duración (en minutos)</label>
                            <input type="number" id="duracion" name="duracion" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Ej. 120">
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                            Crear Ruta y Tarifa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const origenSelect = document.getElementById('ciudad_origen');
        const destinoSelect = document.getElementById('ciudad_destino');

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

        origenSelect.addEventListener('change', function() {
            const selectedOrigin = this.value;
            disableSelectedOption(selectedOrigin, destinoSelect);
        });

        destinoSelect.addEventListener('change', function() {
            const selectedDestination = this.value;
            disableSelectedOption(selectedDestination, origenSelect);
        });
    </script>
</x-app-layout>