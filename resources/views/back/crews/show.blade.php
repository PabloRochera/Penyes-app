<main class="section">
    <div class="container">
        <!-- Título principal -->
        <h1 class="title has-text-centered">Detalles de la Peña</h1>

        <!-- Tarjeta con información de la peña -->
        <div class="card mt-5">
            <div class="card-content">
                <!-- Imagen e información lado a lado -->
                <div class="columns is-vcentered">
                    <!-- Columna de la imagen -->
                    <div class="column is-one-third">
                        <figure class="image is-square" style="max-width: 250px; margin: 0 auto;">
                            <img src="{{ asset('images/placeholder-crew.jpg') }}" alt="Imagen de la Peña">
                        </figure>
                    </div>

                    <!-- Columna de la información -->
                    <div class="column">
                        <h2 class="title is-4">{{ $crew->name }}</h2>
                        <p><strong>Color:</strong> {{ $crew->color }}</p>
                        <p><strong>Slogan:</strong> {{ $crew->slogan }}</p>
                        <p><strong>Capacidad:</strong> {{ $crew->capacity }} miembros</p>
                        <p><strong>Fecha de Fundación:</strong> {{ \Carbon\Carbon::parse($crew->foundation)->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Botón para volver atrás -->
            <div class="card-footer">
                <div class="card-footer-item">
                    <a href="{{ route('back.crews.index') }}" class="button is-primary">Volver a la Lista</a>
                </div>
            </div>
        </div>
    </div>
</main>
