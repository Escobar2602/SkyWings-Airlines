<!-- resources/views/airplanes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Aviones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">¡Éxito!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Formulario para agregar aeronave -->
                <form id="aircraftForm" class="mb-8">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="model" class="block mb-2">Modelo de Avión</label>
                            <input type="text" name="model" id="model" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="seats" class="block mb-2">Número de Asientos</label>
                            <input type="number" name="seats" id="seats" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="plate" class="block mb-2">Placa</label>
                            <input type="text" name="plate" id="plate" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="type" class="block mb-2">Tipo de Avión</label>
                            <select name="type" id="type" class="w-full border-gray-300 rounded-md" required>
                                <option value="">Seleccione un tipo</option>
                                <option value="narrowBody">Fuselaje Estrecho</option>
                                <option value="wideBody">Fuselaje Ancho</option>
                                <option value="regional">Regional</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Registrar Avión</button>
    <div class="py-12 bg-gray-50">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-lg sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h2 class="pb-2 mb-6 text-2xl font-semibold text-gray-800 border-b">Gestión de Flota</h2>

                    @if (session('success'))
                        <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 border border-green-200 rounded-lg" role="alert">
                            <span class="font-medium">Éxito:</span> {{ session('success') }}
                        </div>
                    @endif

                    <!-- Formulario para agregar aeronave -->
                    <div class="p-6 mb-8 bg-white border border-gray-200 rounded-lg shadow-sm">
                        <h3 class="pb-2 mb-4 text-lg font-medium text-gray-700 border-b">Agregar Nueva Aeronave</h3>
                        <form id="aircraftForm" action="{{ route('aircraft.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                                <div>
                                    <label for="model" class="block mb-2 text-sm font-medium text-gray-700">Modelo de Aeronave</label>
                                    <input type="text" id="model" name="model" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="seats" class="block mb-2 text-sm font-medium text-gray-700">Número de Asientos</label>
                                    <input type="number" id="seats" name="seats" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="plate" class="block mb-2 text-sm font-medium text-gray-700">Matrícula</label>
                                    <input type="text" id="plate" name="plate" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="type" class="block mb-2 text-sm font-medium text-gray-700">Tipo de Aeronave</label>
                                    <select id="type" name="type" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="">Seleccione un tipo</option>
                                        <option value="narrowBody">Fuselaje Estrecho</option>
                                        <option value="wideBody">Fuselaje Ancho</option>
                                        <option value="regional">Regional</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="image" class="block mb-2 text-sm font-medium text-gray-700">Imagen de la Aeronave</label>
                                    <input type="file" id="image" name="image" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" accept="image/*">
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Agregar Aeronave
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Tabla de aeronaves -->
                    <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Modelo</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Asientos</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Matrícula</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Tipo</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Imagen</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="aircraftTableBody" class="bg-white divide-y divide-gray-200">
                                @foreach ($aircraft as $plane)
                                <tr data-id="{{ $plane->id }}" class="transition duration-150 ease-in-out hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->model }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->seats }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->plate }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->type }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($plane->image)
                                            <img src="{{ asset('storage/' . $plane->image) }}" alt="{{ $plane->model }}" class="object-cover w-10 h-10 rounded-full">
                                        @else
                                            <span class="text-gray-400">N/A</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button onclick="editAircraft({{ $plane->id }})" class="mr-3 text-blue-600 transition duration-150 ease-in-out hover:text-blue-900">Editar</button>
                                        <form action="{{ route('aircraft.destroy', $plane->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 transition duration-150 ease-in-out hover:text-red-900" onclick="return confirm('¿Está seguro de que desea eliminar esta aeronave?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('aircraftForm');
            const tableBody = document.getElementById('aircraftTableBody');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    addAircraftToTable(data);
                    form.reset();
                })
                .catch(error => console.error('Error:', error));
            });

            function addAircraftToTable(aircraft) {
                const row = document.createElement('tr');
                row.setAttribute('data-id', aircraft.id);
                row.classList.add('hover:bg-gray-50', 'transition', 'duration-150', 'ease-in-out');
                row.innerHTML = `
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${aircraft.model}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${aircraft.seats}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${aircraft.plate}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${aircraft.type}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${aircraft.image ? `<img src="/storage/${aircraft.image}" alt="${aircraft.model}" class="object-cover w-10 h-10 rounded-full">` : '<span class="text-gray-400">N/A</span>'}
                    </td>
                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                        <button onclick="editAircraft(${aircraft.id})" class="mr-3 text-blue-600 transition duration-150 ease-in-out hover:text-blue-900">Editar</button>
                        <form action="/aircraft/${aircraft.id}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 transition duration-150 ease-in-out hover:text-red-900" onclick="return confirm('¿Está seguro de que desea eliminar esta aeronave?')">Eliminar</button>
                        </form>
                    </td>
                `;
                tableBody.appendChild(row);
            }

            window.editAircraft = function(id) {
                // Implementar funcionalidad de edición
                console.log('Editar aeronave con ID:', id);
            }
        });
    </script>
    @endpush
</x-app-layout>
