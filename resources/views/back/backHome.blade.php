<div class="container">
    <!-- Título principal -->
    <div class="content">
        <h1 class="title is-3 has-text-left mt-5">Bienvenido al BackOffice, {{ Auth::user()->name }}</h1>
        <p class="subtitle has-text-left">Esta es la página principal del panel de administración.</p>
    </div>
    <hr>

    <!-- Tabla de accesos rápidos -->
    <div class="box">
        <table class="table is-fullwidth is-hoverable">
            <tbody>
                <!-- Gestión de usuarios -->
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-width="1.05"><circle cx="12" cy="6" r="4"/><path d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" opacity="0.5"/></g></svg>
                        <strong>Usuarios</strong>
                    </td>
                    <td>Gestiona todos los usuarios registrados en el sistema.</td>
                    <td>
                        <a href="{{ route('back.users.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>
                        </a>
                    </td>
                </tr>

                <!-- Gestión de peñas -->
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36"><path fill="black" d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9m-.1-7.7q.15 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8S15 14 15 12.5c0-1.6 1.3-2.9 2.8-2.9"/></svg>
                        <strong>Peñas</strong>
                    </td>
                    <td>Administra los diferentes peñas y sus detalles.</td>
                    <td>
                        <a href="{{ route('back.crews.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>
                        </a>
                    </td>
                </tr>

                <!-- Gestión de carafales -->
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="black" d="m12 .856l10 5.556v11.176l-10 5.556l-10-5.556V6.412zm-8 8.04v7.515l7 3.89v-7.699zM13 20.3l7-3.889V8.897l-7 3.706zm-1-9.432L19.12 7.1L12 3.144L4.88 7.099z"/></svg>
                        <strong>Carafales</strong>
                    </td>
                    <td>Gestiona los carafales de cada peña.</td>
                    <td>
                        <a href="{{ route('back.platforms.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>
                        </a>
                    </td>
                </tr>

                <!-- Gestión de sorteos -->
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="black" d="M495.24 267.592L445.066 41.083A32.04 32.04 0 0 0 406.9 16.76L180.393 66.934a32 32 0 0 0-24.322 38.166l21.021 94.9H48a32.036 32.036 0 0 0-32 32v232a32.036 32.036 0 0 0 32 32h232a32.036 32.036 0 0 0 32-32V340.957l158.917-35.2a32.04 32.04 0 0 0 24.323-38.165"/></svg>
                        <strong>Sorteos</strong>
                    </td>
                    <td>Controla los sorteos.</td>
                    <td>
                        <a href="{{ route('back.draws.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>
                        </a>
                    </td>
                </tr>

                <!-- Gestión de pagos -->
                <tr>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="black" d="M7.5 1a7.5 7.5 0 1 0 0 15a7.5 7.5 0 0 0 0-15m0 13.5a6 6 0 1 1 0-12a6 6 0 0 1 0 12"/></svg>
                        <strong>Pagos</strong>
                    </td>
                    <td>Gestiona los pagos realizados en la plataforma.</td>
                    <td>
                        <a href="{{ route('back.payments.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" stroke="#3498db" stroke-linecap="round" stroke-linejoin="round" d="M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5"/></svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
</div>