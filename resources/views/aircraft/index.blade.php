<!-- resources/views/airplanes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Aviones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <h2 class="mb-4 text-2xl font-semibold">Gestión de Aeronaves</h2>

                @if (session('success'))
                    <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Formulario para agregar aeronave -->
                <form id="aircraftForm" action="{{ route('aircraft.store') }}" method="POST" class="mb-8" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
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
                        <div>
                            <label for="image" class="block mb-2">Imagen de la Aeronave</label>
                            <input type="file" id="image" name="image" class="w-full border-gray-300 rounded-md" accept="image/*">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Registrar Avión</button>
                    </div>
                </form>

                <h3 class="text-lg font-semibold mb-4">Lista de Aviones Registrados</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Modelo</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Asientos</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Placa</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Tipo</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Imagen</th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="aircraftTableBody" class="bg-white divide-y divide-gray-200">
                        @foreach ($aircraft as $plane)
                        <tr data-id="{{ $plane->id }}">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->model }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->seats }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->plate }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->type }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($plane->image)
                                    <img src="{{ asset('storage/' . $plane->image) }}" alt="{{ $plane->model }}" class="object-cover w-10 h-10 rounded-full">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                <button onclick="editAircraft({{ $plane->id }})" class="mr-2 text-indigo-600 hover:text-indigo-900">Editar</button>
                                <form action="{{ route('aircraft.destroy', $plane->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de que quieres eliminar esta aeronave?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.model}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.seats}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.plate}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.type}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        ${aircraft.image ? `<img src="/storage/${aircraft.image}" alt="${aircraft.model}" class="object-cover w-10 h-10 rounded-full">` : 'N/A'}
                    </td>
                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                        <button onclick="editAircraft(${aircraft.id})" class="mr-2 text-indigo-600 hover:text-indigo-900">Editar</button>
                        <form action="/aircraft/${aircraft.id}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de que quieres eliminar esta aeronave?')">Eliminar</button>
                        </form>
                    </td>
                `;
                tableBody.appendChild(row);
            }

            window.editAircraft = function(id) {
                // Implement edit functionality
                console.log('Editar aeronave con ID:', id);
            }
        });
    </script>
    @endpush
</x-app-layout>
