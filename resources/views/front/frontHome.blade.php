<!-- Navegación personalizada del Front Office -->
<header class="navbar is-light">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('log') }}">Inicio</a>
        <a class="navbar-item" href="{{ route('profile.edit') }}">Editar Perfil</a>
    </div>
    <div class="navbar-end">
        <!-- Formulario de cierre de sesión -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <a href="#" class="navbar-item" onclick="event.preventDefault(); this.closest('form').submit();">
                Cerrar Sesión
            </a>
        </form>
    </div>
</header>

<!-- Contenido principal -->
<main class="section">
    <div class="container has-text-centered">
        <p class="title is-4">Bienvenido a la página del Front Office, {{ auth()->user()->name }}</p>
    </div>
</main>
