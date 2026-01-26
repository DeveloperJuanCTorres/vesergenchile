<nav class="navbar navbar-expand-lg navbar-modern fixed-top">
    <div class="container">
        
        <!-- LOGO -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('storage/'. $company->logo) }}" alt="Logo" class="logo-navbar">
        </a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO -->
        <div class="collapse navbar-collapse" id="navbarMain">

            <!-- LINKS -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tienda') ? 'active' : '' }}" href="{{ url('/tienda') }}">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contacto') ? 'active' : '' }}" href="{{ url('/contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('programacion') ? 'active' : '' }}" href="{{ url('/programacion') }}">Programación</a>
                </li>                
            </ul>

            <!-- BUSCADOR -->
            <form class="d-flex me-3" role="search" method="GET" action="{{ route('store.index') }}">
                <input
                    class="form-control form-control-sm search-navbar"
                    type="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Buscar productos..."
                    aria-label="Buscar"
                >
            </form>

            <!-- ICONOS -->
            <div class="d-flex align-items-center gap-3">
                <!-- <a href="{{ url('/carrito') }}" class="icon-nav">
                    <i class="bi bi-cart3"></i>
                </a> -->

                @guest
                    <!-- USUARIO NO LOGUEADO -->
                    <a href="#" class="icon-nav" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="bi bi-person-circle fs-4"></i>
                    </a>
                @endguest

                @auth
                    <!-- USUARIO LOGUEADO -->
                    <div class="dropdown">

                        <a href="#"
                        class="d-flex align-items-center gap-2 text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown">

                            <img src="storage/{{ Auth::user()->avatar ?? asset('images/user-default.png') }}"
                                class="rounded-circle"
                                width="36"
                                height="36">

                            <span class="fw-semibold">
                                {{ Auth::user()->name }}
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow rounded-4">

                            <li class="px-3 py-2">
                                <div class="fw-bold">{{ Auth::user()->name }}</div>
                                <small class="text-muted">{{ Auth::user()->email }}</small>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="bi bi-person me-2"></i> Perfil
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-bag-check me-2"></i> Mis compras
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
                                    </button>
                                </form>
                            </li>
                        </ul>

                    </div>
                @endauth

            </div>

        </div>
    </div>
</nav>


<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">

            <!-- HEADER -->
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body px-4 pb-4">

                <p class="text-muted mb-4">
                    Accede a tu cuenta para continuar
                </p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- EMAIL -->
                    <div class="form-floating mb-3">
                        <input type="email"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="Correo electrónico"
                               required>
                        <label for="email">Correo electrónico</label>
                    </div>

                    <!-- PASSWORD -->
                    <div class="form-floating mb-3">
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="Contraseña"
                               required>
                        <label for="password">Contraseña</label>
                    </div>

                    <!-- REMEMBER -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Recordarme
                        </label>
                    </div>

                    <!-- BOTÓN -->
                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-3">
                        Iniciar sesión
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>

