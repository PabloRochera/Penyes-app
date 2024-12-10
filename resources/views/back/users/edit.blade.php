<main class="section">
    <div class="container">
        <section class="box">
            <h1 class="title has-text-centered">Editar Usuario</h1>

            <!-- Formulario de edición -->
            <form method="POST" action="{{ route('back.users.update', $user->id) }}" class="mt-5">
                @csrf
                @method('PUT') <!-- Indica que estamos actualizando un recurso -->

                <div class="columns is-multiline">
                    <!-- Campo de nombre -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="name" class="label">Nombre</label>
                            <div class="control">
                                <input id="name" type="text" class="input" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name">
                            </div>
                            @error('name')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de apellido -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="surname" class="label">Apellido</label>
                            <div class="control">
                                <input id="surname" type="text" class="input" name="surname" value="{{ old('surname', $user->surname) }}" required autocomplete="surname">
                            </div>
                            @error('surname')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de fecha de nacimiento -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="birthday" class="label">Fecha de Nacimiento</label>
                            <div class="control">
                                <input id="birthday" type="date" class="input" name="birthday" value="{{ old('birthday', $user->birthday) }}" required autocomplete="birthday">
                            </div>
                            @error('birthday')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de correo electrónico -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="email" class="label">Correo Electrónico</label>
                            <div class="control">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
                            </div>
                            @error('email')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Campo de rol -->
                    <div class="column is-half">
                        <div class="field">
                            <label for="role" class="label">Rol</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select id="role" name="role">
                                        <option value="1" {{ old('role', $user->role) == 1 ? 'selected' : '' }}>Admin</option>
                                        <option value="2" {{ old('role', $user->role) == 2 ? 'selected' : '' }}>Usuario</option>
                                    </select>
                                </div>
                            </div>
                            @error('role')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="columns is-centered mt-4">
                    <div class="column is-narrow">
                        <a href="{{ route('back.users.index') }}" class="button is-link is-light">Cancelar</a>
                    </div>
                    <div class="column is-narrow">
                        <button type="submit" class="button is-primary">Actualizar Usuario</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>