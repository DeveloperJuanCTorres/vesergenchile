@extends('layouts.app')

@section('content')


<section class="hero-banner">
    <div class="container text-center text-white pt-5">
        <h1 class="fw-bold mb-2">Programación</h1>
        <span class="program-banner-text">
            Este proceso abarca una amplia gama de tareas y habilidades, desde el diseño y desarrollo
            del front-end (lo que los usuarios ven e interactúan) hasta el back-end
            (los servidores y bases de datos que manejan la lógica de la aplicación).
        </span>
    </div>
</section>

<!-- =======================
    MÉTRICAS
======================= -->
<section class="py-5 bg-white">
    <div class="container">

        <div class="row justify-content-center text-center g-4">

            <!-- CLIENTES -->
            <div class="col-md-4">
                <div class="metric-item">
                    <div class="metric-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h3 class="fw-bold mt-3">10,000 +</h3>
                    <span class="text-muted">Happy Customers</span>
                </div>
            </div>

            <!-- EXPERIENCIA -->
            <div class="col-md-4">
                <div class="metric-item">
                    <div class="metric-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>

                    <h3 class="fw-bold mt-3">15</h3>
                    <span class="text-muted">Años de experiencia</span>
                </div>
            </div>

            <!-- TECNOLOGÍA -->
            <div class="col-md-4">
                <div class="metric-item">
                    <div class="metric-icon">
                        <i class="bi bi-cpu-fill"></i>
                    </div>

                    <h3 class="fw-bold mt-3">500 +</h3>
                    <span class="text-muted">Variedad de modelos</span>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =======================
    SECCIÓN IMAGEN + TEXTO
======================= -->
<section class="program-hero-image">
    <div class="container-fluid">
        <div class="row align-items-center" style="min-height: 500px;">

            <div class="col-lg-6">
                <div class="program-hero-text text-center">
                    <h3>Diseños en</h3>
                    <h1 class="fw-bold" style="font-size: 50px;">Tendencia</h1>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =======================
    BENEFICIOS
======================= -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="row g-4">

                    <!-- CARD -->
                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm p-4 text-center h-100">
                            <i class="bi bi-globe fs-1 text-primary mb-3"></i>
                            <h6 class="fw-bold">Presencia en línea</h6>
                            <span class="text-muted">
                                Permite a las empresas y organizaciones tener una presencia en línea
                                profesional y funcional.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm p-4 text-center h-100">
                            <i class="bi bi-ui-checks fs-1 text-primary mb-3"></i>
                            <h6 class="fw-bold">Interacción y Experiencia del Usuario</h6>
                            <span class="text-muted">
                                Mejora la interactividad y experiencia del usuario mediante interfaces
                                atractivas y funcionalidades dinámicas.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm p-4 text-center h-100">
                            <i class="bi bi-phone fs-1 text-primary mb-3"></i>
                            <h6 class="fw-bold">Accesibilidad</h6>
                            <span class="text-muted">
                                Garantiza que los sitios web sean accesibles desde diferentes dispositivos
                                y navegadores.
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 rounded-4 shadow-sm p-4 text-center h-100">
                            <i class="bi bi-diagram-3 fs-1 text-primary mb-3"></i>
                            <h6 class="fw-bold">Escalabilidad</h6>
                            <span class="text-muted">
                                Facilita la expansión y mejora de sitios web y aplicaciones según
                                las necesidades del negocio.
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

@include('partials.footer')

@endsection