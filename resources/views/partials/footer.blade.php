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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contáctanos</a></li>
                    <li><a href="#">Tienda</a></li>
                </ul>
            </div>

            <!-- COLUMNA 3 -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Categorías</h6>
                <ul class="footer-links">
                    <li><a href="#">Gaming Laptops</a></li>
                    <li><a href="#">Business Laptops</a></li>
                    <li><a href="#">Ultrabooks</a></li>
                    <li><a href="#">Budget Laptops</a></li>
                    <li><a href="#">Creative Laptops</a></li>
                </ul>
            </div>

            <!-- COLUMNA 4 -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-title">Stay Updated</h6>

                <span class="footer-text">
                    Subscribe to our newsletter for the latest deals and tech news
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
                © 2026 TechWorld Laptops. All rights reserved
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
                <a href="#">Privacy Policy</a>
                <a href="#" class="ms-3">Terms of Service</a>
            </div>

        </div>

        <!-- LINEA -->
        <hr class="footer-divider mt-4">

        <!-- HORARIO -->
        <div class="row">
            <div class="col-12 text-center">
                <span class="footer-hours-title">
                    Business Hours:
                </span>
                <br>
                <span class="footer-hours-text">
                    {{$company->horario}}
                </span>
            </div>
        </div>

    </div>
</footer>
