<body>
    <section class="section">
        <div class="container">
            <!-- Título -->
            <h1 class="title has-text-centered has-text-primary">Mensaje del Administrador</h1>

            <!-- Asunto -->
            <div class="box">
                <p><strong>Asunto:</strong> {{ $details['subject'] }}</p>
            </div>

            <!-- Mensaje -->
            <div class="content">
                <p><strong>Mensaje:</strong></p>
                <div class="box has-background-light">
                    {{ $details['message'] }}
                </div>
            </div>

            <!-- Pie de mensaje -->
            <div class="notification is-info is-light has-text-centered">
                <p>Este mensaje fue enviado por el administrador desde el sistema de back-office.</p>
            </div>
        </div>
    </section>
</body>
