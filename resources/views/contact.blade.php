@extends('layouts.app')

@section('content')

<section class="hero-banner">
    <div class="container pt-5">
        <div class="text-center text-white">
            <h1 class="fw-bold mb-2">Contacto</h1>
            <span class="contact-banner-text">
                Si tienes consultas, deseas una cotización o necesitas asesoría para elegir la licencia ideal
                para tu PC o alguna página web, nuestro equipo te atenderá de manera rápida y personalizada.
            </span>
        </div>
    </div>
</section>

<!-- =======================
    CONTENIDO
======================= -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- FORMULARIO -->
            <div class="col-lg-6">
                <div class="card border-0 rounded-4 shadow-sm p-4 h-100">

                    <h5 class="fw-bold mb-1">Envíanos un mensaje</h5>
                    <span class="text-muted mb-4 d-block">
                        Complete el siguiente formulario y nos comunicaremos con usted lo antes posible
                    </span>

                    <form method="POST" action="#">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control rounded-pill"
                                       placeholder="Nombre completo" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control rounded-pill"
                                       placeholder="Número telefónico" required>
                            </div>

                            <div class="col-12">
                                <input type="email" class="form-control rounded-pill"
                                       placeholder="Dirección de correo electrónico" required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control rounded-pill"
                                       placeholder="Sujeto" required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control rounded-4"
                                          rows="4"
                                          placeholder="Mensaje" required></textarea>
                            </div>
                        </div>

                        <button type="submit"
                                class="btn btn-primary mt-4 px-4 rounded w-100">
                            <i class="bi bi-send me-1"></i>
                            Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>

            <!-- INFO CONTACTO -->
            <div class="col-lg-6">

                <h5 class="fw-bold mb-1">Ponte en contacto</h5>
                <span class="text-muted d-block mb-4">
                    Ya sea que necesite información sobre licencias digitales o programación (diseño web),
                    estamos aquí para ayudarlo en cada paso del camino.
                </span>

                <!-- TELEFONO -->
                <div class="card border-0 rounded-4 shadow-sm p-3 mb-3">
                    <div class="d-flex align-items-start gap-3">

                        <div class="contact-icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <span class="fw-bold d-block">Teléfono</span>
                            <span class="text-muted d-block">{{$company->phone}}</span>
                            <span class="text-muted small">Llámanos en horario comercial</span>
                        </div>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="card border-0 rounded-4 shadow-sm p-3 mb-4">
                    <div class="d-flex align-items-start gap-3">

                        <div class="contact-icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <span class="fw-bold d-block">Email</span>
                            <span class="text-muted d-block">{{$company->email}}</span>
                            <span class="text-muted small">Escríbenos cuando lo necesites</span>
                        </div>
                    </div>
                </div>

                <!-- HORARIO -->
                <div class="d-flex align-items-start gap-3 pt-3 border-top">
                    <div class="contact-icon-box">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div>
                        <span class="fw-bold d-block">Horario de atención</span>
                        <span class="text-muted d-block">
                            {{$company->horario}}
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@include('partials.footer')

@endsection