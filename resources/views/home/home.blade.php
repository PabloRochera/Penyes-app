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
                <div class="carousel-item"><img src="image1.jpg" alt="Imagen 1"></div>
                <div class="carousel-item"><img src="imagen2.jpg" alt="Imagen 2"></div>
                <div class="carousel-item"><img src="image3.jpg" alt="Imagen 3"></div>
            </div>
        </div>
    </section>

    <!-- Sección de Actividades y Horarios -->
    <section class="section has-background-light">
    <div class="container">
        <div class="box">
            <h2 class="title has-text-info">Actividades y Horarios</h2>
            <p>Mantente al tanto de nuestros eventos semanales y descubre la diversidad de opciones que ofrecemos. Desde disciplinas deportivas hasta experiencias culturales y gastronómicas, aquí encontrarás oportunidades para socializar, aprender y divertirte.</p>
            <ul>
                <li><strong>Clase de Judo (Lunes, 10:00 AM):</strong> Comienza la semana con energía, aprendiendo técnicas de defensa personal y disciplina mental, todo en un entorno de compañerismo.</li>
                <li><strong>Taller de Fotografía (Martes, 4:00 PM):</strong> Mejora tu mirada artística explorando el mundo de la fotografía. Aprende encuadre, iluminación y edición básica con expertos en el campo.</li>
                <li><strong>Concurso de Paellas (Miércoles, 3:00 PM):</strong> Demuestra tus dotes culinarias o disfruta como espectador probando las mejores paellas de la comunidad. ¡Un festín de sabores que no te puedes perder!</li>
                <li><strong>Encuentro de Lectura (Jueves, 6:00 PM):</strong> Comparte tus opiniones sobre libros y autores, y descubre nuevas recomendaciones literarias en un ambiente relajado y participativo.</li>
                <li><strong>Reunión General (Viernes, 5:00 PM):</strong> Infórmate sobre las novedades, planes futuros y proyectos de la comunidad. Este espacio es ideal para aportar tus ideas y crecer juntos.</li>
                <li><strong>Sábado Cultural (Sábado, 11:00 AM):</strong> Sumérgete en exposiciones temporales, talleres artísticos y actividades culturales pensadas para todas las edades y gustos.</li>
                <li><strong>Taller de Baile (Domingo, 4:00 PM):</strong> Cierra la semana aprendiendo pasos de baile, mejorando tu coordinación y divirtiéndote mientras te mueves al ritmo de la música.</li>
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
            <!-- Map embebido de Google Maps -->
            <div style="width: 100%; height: 300px;">
                <iframe 
                    src="https://www.bing.com/search?pglt=299&q=fiesta+las+vall&cvid=bdae29b38363480e980afe51f4648ac5&gs_lcrp=EgRlZGdlKgYIABBFGDkyBggAEEUYOTIGCAEQABhAMgYIAhAAGEAyBggDEAAYQDIGCAQQABhAMgYIBRAAGEAyBggGEAAYQDIGCAcQABhAMgYICBAAGEDSAQgzMDY5ajBqMagCALACAA&FORM=ANNTA1&PC=LCTS#" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
