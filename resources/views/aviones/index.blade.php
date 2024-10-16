<x-app-layout>
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
                        <form id="avionForm" action="{{ route('aircraft.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                                <div>
                                    <label for="avion" class="block mb-2 text-sm font-medium text-gray-700">Nombre de Aeronave</label>
                                    <input type="text" id="avion" name="avion" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="capacidad" class="block mb-2 text-sm font-medium text-gray-700">Número de Asientos</label>
                                    <input type="number" id="capacidad" name="capacidad" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="matricula" class="block mb-2 text-sm font-medium text-gray-700">Matrícula</label>
                                    <input type="text" id="matricula" name="matricula" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                                <div>
                                    <label for="modelo" class="block mb-2 text-sm font-medium text-gray-700">Tipo de Aeronave</label>
                                    <select id="modelo" name="modelo" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="">Seleccione un tipo</option>
                                        <option value="narrowBody">Fuselaje Estrecho</option>
                                        <option value="wideBody">Fuselaje Ancho</option>
                                        <option value="regional">Regional</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="estado" class="block mb-2 text-sm font-medium text-gray-700">Estado</label>
                                    <input type="text" id="estado" name="estado" class="w-full px-3 py-2 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button id="agregarAeronaveBtn" type="submit" class="px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Agregar Aeronave
                                </button>
                            </div>
                            </form>

                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                            <script>
                                document.getElementById('agregarAeronaveBtn').addEventListener('click', function(event) {
                                    // Prevenir el envío inmediato del formulario
                                    event.preventDefault();

                                    Swal.fire({
                                        title: "Buen trabajo",
                                        text: "Registro una areonave",
                                        icon: "success"
                                    }).then(() => {
                                        // Aquí se envía el formulario después de que se cierre la alerta
                                    });
                                });
                            </script>

                        </form>
                    </div>

                    <!-- Tabla de aeronaves -->
                    <div class="overflow-x-auto bg-white border border-gray-200 rounded-lg shadow-sm">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Avion</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Capacidad</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Matrícula</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Modelo</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Estado</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="avionTableBody" class="bg-white divide-y divide-gray-200">
                                @foreach ($aviones as $plane)
                                <tr data-id="{{ $plane->id }}" class="transition duration-150 ease-in-out hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->avion }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->capacidad }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->matricula }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->modelo }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">{{ $plane->estado }}</td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <button onclick="editAvion({{ $plane->id }})" class="mr-3 text-blue-600 transition duration-150 ease-in-out hover:text-blue-900">Editar</button>
                                        <form action="{{ route('avion.destroy', $plane->id) }}" method="POST" class="inline">
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
            const form = document.getElementById('avionForm');
            const tableBody = document.getElementById('avionTableBody');

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
                    addAvionToTable(data);
                    form.reset();
                })
                .catch(error => console.error('Error:', error));
            });

            function addAvionToTable(avion) {
                const row = document.createElement('tr');
                row.setAttribute('data-id', avion.id);
                row.classList.add('hover:bg-gray-50', 'transition', 'duration-150', 'ease-in-out');
                row.innerHTML = `
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${avion.avion}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${avion.capacidad}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${avion.matricula}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${avion.modelo}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">${avion.estado}</td>
                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                        <button onclick="editAvion(${avion.id})" class="mr-3 text-blue-600 transition duration-150 ease-in-out hover:text-blue-900">Editar</button>
                        <form action="/avion/${avion.id}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 transition duration-150 ease-in-out hover:text-red-900" onclick="return confirm('¿Está seguro de que desea eliminar esta aeronave?')">Eliminar</button>
                        </form>
                    </td>
                `;
                tableBody.appendChild(row);
            }

            window.editAvion = function(id) {
                // Implementar funcionalidad de edición
                console.log('Editar aeronave con ID:', id);
            }
        });
    </script>
    @endpush
</x-app-layout>
