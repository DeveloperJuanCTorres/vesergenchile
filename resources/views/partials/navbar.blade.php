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
            <form class="d-flex me-3" role="search">
                <input class="form-control form-control-sm search-navbar" type="search" placeholder="Buscar...">
            </form>

            <!-- ICONOS -->
            <div class="d-flex align-items-center gap-3">
                <a href="{{ url('/carrito') }}" class="icon-nav">
                    <i class="bi bi-cart3"></i>
                </a>

                <a href="{{ url('/login') }}" class="icon-nav">
                    <i class="bi bi-person-circle"></i>
                </a>
            </div>

        </div>
    </div>
</nav>
