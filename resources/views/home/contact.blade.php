<!-- Sección de Preguntas Frecuentes -->
<section class="section">
    <div class="container">
        <h1 class="title has-text-centered has-text-primary">Preguntas Frecuentes (FAQ)</h1>
        <div class="box has-background-light">
            <article class="message is-info">
                <div class="message-body">
                <p></p>
                </div>
            </article>
            <article class="message is-info">
                <div class="message-body">
                <p></p>
                </div>
            </article>
            <article class="message is-info">
                <div class="message-body">
                    <p></p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Sección de Formulario de Contacto -->
<section class="section">
    <div class="container">
        <h2 class="title has-text-centered has-text-primary">Formulario de Contacto</h2>
        <div class="box has-background-light">
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="field">
                    <label class="label has-text-info">Nombre</label>
                    <div class="control">
                        <input class="input is-primary" type="text" name="name" placeholder="Tu nombre completo" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-info">Correo Electrónico</label>
                    <div class="control">
                        <input class="input is-primary" type="email" name="email" placeholder="ejemplo@correo.com" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label has-text-info">Mensaje</label>
                    <div class="control">
                        <textarea class="textarea is-primary" name="message" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                </div>

                <div class="field is-grouped is-justify-content-center">
                    <div class="control">
                        <button class="button is-link is-outlined" type="submit">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Pie de Página -->
<footer class="footer has-background-dark has-text-light">
    <div class="content has-text-centered">
        <p>&copy; 2024 Penyes App. Todos los derechos reservados.</p>
    </div>
</footer>
