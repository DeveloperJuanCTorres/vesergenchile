<footer class="footer-section">
    <div class="container">

        <!-- LOGO -->
        <div class="row mb-4">
            <div class="col-12">
                <img src="{{ asset('storage/'. $company->logo) }}" alt="Logo" class="footer-logo">
            </div>
        </div>

        <!-- COLUMNAS -->
        <div class="row gy-4">

            <!-- COLUMNA 1 -->
            <div class="col-lg-4 col-md-6">
                <span class="footer-text">
                    {{$company->description}}
                </span>

                <div class="footer-contact mt-3">
                    <span><i class="bi bi-telephone-fill"></i> {{$company->phone}}</span>
                    <span><i class="bi bi-envelope-fill"></i> {{$company->email}}</span>
                    <span><i class="bi bi-geo-alt-fill"></i> {{$company->address}}</span>
                </div>
            </div>

            <!-- COLUMNA 2 -->
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-title">Enlaces</h6>
                <ul class="footer-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/tienda">Tienda</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/programacion">Programación</a></li>
                </ul>
            </div>

            <!-- COLUMNA 3 -->
            <!-- <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Categorías</h6>
                <ul class="footer-links">
                    <li><a href="#">Gaming Laptops</a></li>
                    <li><a href="#">Business Laptops</a></li>
                    <li><a href="#">Ultrabooks</a></li>
                    <li><a href="#">Budget Laptops</a></li>
                    <li><a href="#">Creative Laptops</a></li>
                </ul>
            </div> -->

            <!-- COLUMNA 4 -->
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-title">Manténgase actualizado</h6>

                <span class="footer-text">
                    Suscríbete a nuestro boletín para recibir las últimas ofertas y novedades tecnológicas.
                </span>

                <input type="email" class="footer-input mt-3" placeholder="Enter your email">

                <button class="footer-btn mt-3">
                    Subscribe
                </button>
            </div>

        </div>

        <!-- LINEA -->
        <hr class="footer-divider mt-5">

        <!-- BARRA INFERIOR -->
        <div class="row align-items-center gy-3">

            <!-- IZQUIERDA -->
            <div class="col-lg-4 text-start footer-bottom-text">
                © 2026 {{$company->name}}. Todos los derechos reservados
            </div>

            <!-- CENTRO -->
            <div class="col-lg-4 text-center footer-socials">
                <a href="{{$company->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="{{$company->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="{{$company->tiktok}}" target="_blank"><i class="bi bi-tiktok"></i></a>
                <a href="{{$company->youtube}}" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>

            <!-- DERECHA -->
            <div class="col-lg-4 text-end footer-bottom-links">
                <a href="/politicas">Políticas de privacidad</a>
                <a href="/terminos" class="ms-3">Términos y condiciones</a>
            </div>

        </div>

        <!-- LINEA -->
        <hr class="footer-divider mt-4">

        <!-- HORARIO -->
        <div class="row">
            <div class="col-12 text-center">
                <span class="footer-hours-title">
                    Horario de atención:
                </span>
                <br>
                <span class="footer-hours-text">
                    {{$company->horario}}
                </span>
            </div>
        </div>

    </div>
</footer>
