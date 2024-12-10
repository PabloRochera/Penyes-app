    <!-- Sección de Eslogan -->
    <section class="section has-background-light">
        <div class="container has-text-centered">
            <h1 class="title has-text-primary">Eslogan</h1>
            <div class="background-image" style="background-image: url('/path/to/1.png'); height: 300px; background-size: cover; background-position: center;">
                <img src="/path/to/1.png" alt="Imagen del eslogan" style="opacity: 0; width: 100%; height: 300px;">
            </div>
        </div>
    </section>

    <!-- Sección de Carrusel -->
    <section class="section">
        <div class="container">
            <h2 class="title has-text-centered has-text-info">Galería</h2>
            <div class="carousel">
                <!-- Imágenes de ejemplo del carrusel -->
                <div class="carousel-item"><img src="/path/to/image1.jpg" alt="Imagen 1"></div>
                <div class="carousel-item"><img src="/path/to/image2.jpg" alt="Imagen 2"></div>
                <div class="carousel-item"><img src="/path/to/image3.jpg" alt="Imagen 3"></div>
            </div>
        </div>
    </section>

    <!-- Sección de Actividades y Horarios -->
    <section class="section has-background-light">
        <div class="container">
            <div class="box">
                <h2 class="title has-text-info">Actividades y Horarios</h2>
                <p>Consulta nuestras actividades y horarios en esta sección.</p>
                <!-- Ejemplo de actividades -->
                <ul>
                    <li>Clase de judo: Lunes, 10:00 AM</li>
                    <li>Concurso de paellas: Miércoles, 3:00 PM</li>
                    <li>Reunión general: Viernes, 5:00 PM</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sección Sobre Nosotros -->
    <section class="section">
        <div class="container">
            <div class="box has-background-white">
                <h2 class="title has-text-primary">Sobre Nosotros</h2>
                <p>Somos una plataforma que conecta peñas y promueve la comunidad entre sus miembros. Nuestro objetivo es facilitar actividades y eventos que fomenten la participación activa.</p>
                <a href="{{ url('/contact') }}" class="button is-link is-outlined">Contáctanos</a>
            </div>
        </div>
    </section>

    <!-- Sección de Ubicaciones -->
    <section class="section has-background-light">
        <div class="container">
            <div class="box">
                <h2 class="title has-text-info">Ubicaciones</h2>
                <p>Encuentra nuestras peñas en estas ubicaciones:</p>
                <!-- Aquí se puede integrar un mapa interactivo -->
                <div class="map-placeholder" style="width: 100%; height: 300px; background-color: #f0f0f0; text-align: center; line-height: 300px;">
                    <span>Mapa próximamente</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="footer has-background-dark has-text-light">
        <div class="content has-text-centered">
            <p>&copy; 2024 Penyes App. Todos los derechos reservados.</p>
        </div>
    </footer>
