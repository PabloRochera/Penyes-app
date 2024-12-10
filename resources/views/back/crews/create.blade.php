<main class="section">
    <div class="container">
        <!-- Sección del formulario de creación de peña -->
        <section class="box">
            <header>
                <h1 class="title has-text-centered">Crear Peña</h1>
            </header>

            <!-- Formulario de registro de peña -->
            <form method="POST" action="{{ route('back.crews.store') }}" class="mt-5">
                @csrf

                <div class="columns is-multiline">
                    <!-- Campo de nombre -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="name" class="label">Nombre</label>
                            <div class="control">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            @error('name')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de color -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="color" class="label">Color</label>
                            <div class="control">
                                <input id="color" type="text" class="input" name="color" value="{{ old('color') }}" required>
                            </div>
                            @error('color')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de slogan -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="slogan" class="label">Slogan</label>
                            <div class="control">
                                <input id="slogan" type="text" class="input" name="slogan" value="{{ old('slogan') }}" required>
                            </div>
                            @error('slogan')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de capacidad -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="capacity" class="label">Capacidad</label>
                            <div class="control">
                                <input id="capacity" type="number" class="input" name="capacity" value="{{ old('capacity') }}" required>
                            </div>
                            @error('capacity')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de fecha de fundación -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="foundation" class="label">Fecha de Fundación</label>
                            <div class="control">
                                <input id="foundation" type="date" class="input" name="foundation" value="{{ old('foundation') }}" required>
                            </div>
                            @error('foundation')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Botón de envío -->
                    <div class="column is-full has-text-centered">
                        <button type="submit" class="button is-primary is-large">Crear Peña</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- Notificaciones -->
        @if (session('success'))
            <div class="notification is-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="notification is-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</main>
