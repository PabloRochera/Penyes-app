<body>
    <section class="section">
        <div class="container box" style="border: 1px solid #dbdbdb; padding: 20px; max-width: 600px; margin: 0 auto; border-radius: 8px;">
            <!-- Título del Mensaje -->
            <h1 class="title is-4 has-text-primary has-text-centered">Nuevo Mensaje de Contacto</h1>

            <!-- Contenido del Mensaje -->
            <div class="content">
                <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
                <p><strong>Email:</strong> {{ $details['email'] }}</p>
                <p><strong>Mensaje:</strong></p>
                <div class="box" style="background-color: #f5f5f5; padding: 10px; border-radius: 5px; font-style: italic;">
                    {{ $details['message'] }}
                </div>
            </div>
        </div>
    </section>
</body>
</html>
