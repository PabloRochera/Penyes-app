<main class="section">
    <div class="container">
        <section class="box">
            <h1 class="title has-text-centered">Detalles del Usuario</h1>

            <!-- Información del usuario -->
            <div class="content is-medium mt-5">
                <table class="table is-fullwidth is-striped">
                    <tbody>
                        <tr>
                            <th class="has-text-weight-semibold">Nombre:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Apellido:</th>
                            <td>{{ $user->surname }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Fecha de Nacimiento:</th>
                            <td>{{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Correo Electrónico:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th class="has-text-weight-semibold">Rol:</th>
                            <td>{{ $user->role == 1 ? 'Admin' : 'Usuario' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Formulario para enviar mensaje -->
            <section class="box mt-5">
                <h2 class="title is-4 has-text-centered">Enviar Mensaje a {{ $user->name }}</h2>
                <form method="POST" action="{{ route('back.users.contact', ['user' => $user->id]) }}">
                    @csrf
                    <!-- Campo de asunto -->
                    <div class="field">
                        <label for="subject" class="label">Asunto</label>
                        <input id="subject" type="text" class="input" name="subject" placeholder="Asunto del mensaje" required>
                        @if ($errors->has('subject'))
                            <p class="help is-danger">{{ $errors->first('subject') }}</p>
                        @endif
                    </div>

                    <!-- Campo de mensaje -->
                    <div class="field">
                        <label for="message" class="label">Mensaje</label>
                        <textarea id="message" class="textarea" name="message" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
                        @if ($errors->has('message'))
                            <p class="help is-danger">{{ $errors->first('message') }}</p>
                        @endif
                    </div>

                    <!-- Botón de envío -->
                    <div class="field has-text-centered mt-4">
                        <button type="submit" class="button is-primary">Enviar Mensaje</button>
                    </div>
                </form>
            </section>
        </section>
    </div>
</main>

