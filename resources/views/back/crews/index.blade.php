<main class="section">
    <div class="container is-fluid">
        <!-- Encabezado con título y botones -->
        <div class="columns is-vcentered mb-5">
            <!-- Columna del título -->
            <div class="column">
                <h1 class="title">Lista de Peñas</h1>
            </div>

            <!-- Columna del formulario de búsqueda -->
            <div class="column is-two-fifths">
                @include('back.partials.searchCrews')
            </div>

            <!-- Columna del botón "Crear Peña" -->
            <div class="column is-narrow">
                <a href="{{ route('back.crews.create') }}" class="button is-success">Crear Peña</a>
            </div>
        </div>

        <!-- Tabla de peñas -->
        <div class="box">
            <table class="table is-fullwidth is-hoverable is-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Color</th>
                        <th>Slogan</th>
                        <th>Capacidad</th>
                        <th>Fundación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($crews as $crew)
                    <tr>
                        <td>{{ $crew->name }}</td>
                        <td>{{ $crew->color }}</td>
                        <td>{{ $crew->slogan }}</td>
                        <td>{{ $crew->capacity }}</td>
                        <td>{{ \Carbon\Carbon::parse($crew->foundation)->format('d/m/Y') }}</td>
                        <td>
                            <!-- Ver -->
                            <a href="{{ route('back.crews.show', $crew->id) }}" title="Ver">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.05"
                                    d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12M11 7h6M7 7h1m-1 5h1m-1 5h1m3-5h6m-6 5h6" color="#3498db"/>
                                </svg>
                            </a>

                            <!-- Editar -->
                            <a href="{{ route('back.crews.edit', $crew->id) }}" title="Editar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#f39c12" stroke-linecap="round" stroke-linejoin="round"
                                    d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8"/>
                                </svg>
                            </a>

                            <!-- Eliminar -->
                            <form action="{{ route('back.crews.destroy', $crew->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    onclick="return confirm('¿Estás seguro de que quieres eliminar esta peña?')"
                                    style="border: none; background: none;" title="Eliminar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                        <path fill="#e74c3c" d="M20 10.5v.5h8v-.5a4 4 0 0 0-8 0m-2.5.5v-.5a6.5 6.5 0 1 1 13 0v.5h11.25a1.25 1.25 0 1 1 0 2.5h-2.917l-2 23.856A7.25 7.25 0 0 1 29.608 44H18.392a7.25 7.25 0 0 1-7.224-6.644l-2-23.856H6.25a1.25 1.25 0 1 1 0-2.5zm-3.841 26.147a4.75 4.75 0 0 0 4.733 4.353h11.216a4.75 4.75 0 0 0 4.734-4.353L36.324 13.5H11.676zM21.5 20.25a1.25 1.25 0 1 0-2.5 0v14.5a1.25 1.25 0 1 0 2.5 0zM27.75 19c.69 0 1.25.56 1.25 1.25v14.5a1.25 1.25 0 1 1-2.5 0v-14.5c0-.69.56-1.25 1.25-1.25"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="has-text-centered has-text-grey-light">No hay peñas disponibles.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>

