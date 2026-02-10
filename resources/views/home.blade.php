@extends('layouts.app')

@section('content')

<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            
            <!-- TEXTO IZQUIERDA -->
            <div class="col-lg-6 col-md-12 text-start">
                <h1 class="hero-title text-white">
                    Licencias digitales
                </h1>

                <h1 class="hero-subtitle">
                    Originales para tu PC
                </h1>

                <span class="hero-text">
                    Optimiza y protege tu computadora con licencias digitales originales,
                    diseñadas para brindarte seguridad, rendimiento y productividad
                    desde el primer momento.
                </span>

                <div class="mt-4">
                    <a href="{{ url('/contacto') }}" class="btn hero-btn">
                        Solicita tu licencia
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="benefits-section">
    <div class="container">
        <div class="row justify-content-center text-center g-4">

            <!-- BENEFICIO 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-cpu"></i>
                    </div>

                    <h5 class="benefit-title">
                        Última tecnología
                    </h5>

                    <span class="benefit-text">
                        Mejor rendimiento de tu equipo
                    </span>
                </div>
            </div>

            <!-- BENEFICIO 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h5 class="benefit-title">
                        Garantía protegida
                    </h5>

                    <span class="benefit-text">
                        Cumplimiento legal y tranquilidad total
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="top-products-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="top-products-title">
                    Productos más vendidos
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="products-section">
    <div class="container">

        <!-- TEXTO SUPERIOR -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="products-intro">
                    Nuestras licencias permiten una activación rápida y segura, garantizando el correcto funcionamiento
                    de tu sistema y aplicaciones, sin riesgos ni complicaciones.
                </span>
            </div>
        </div>

        <!-- PRODUCTOS -->
        <div class="row g-4">

            <!-- PRODUCTO -->
             @foreach($products as $product)
            <div class="col-lg-4 col-md-6">
                <div class="product-card">

                    <!-- IMAGEN -->
                    <div class="product-image-wrapper">
                        <span class="product-badge">PROMO</span>
                        @php
                            $images = collect(json_decode($product->images));
                        @endphp
                        <img src="{{ asset('storage/' . $images->first()) }}" class="product-image" alt="Producto">
                    </div>

                    <!-- CONTENIDO -->
                    <div class="product-body">

                        <!-- CATEGORIA + RATING -->
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="product-category">{{ $product->taxonomy->name ?? 'General' }}</span>
                            <div class="product-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>

                        <!-- NOMBRE -->
                        <h6 class="product-title">
                            {{ $product->name }}
                        </h6>

                        <!-- DESCRIPCION -->
                        <!-- <p class="product-description">
                             Str::markdown(product->description) 
                        </p> -->

                        <!-- PRECIO + STOCK -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="product-price">
                                $ {{ number_format($product->price, 3) }}
                            </span>

                            <span class="product-stock">
                                Stock: {{$product->stock}}
                            </span>
                        </div>

                        <!-- BOTONES -->
                        <div class="d-flex gap-2">
                            <a href="#"
                            class="btn btn-outline-dark w-50 product-btn-info"
                            data-bs-toggle="modal"
                            data-bs-target="#productModal-{{ $product->id }}">
                                Más información
                            </a>

                            @php
                                $message = urlencode(
                                    "Hola, estoy interesado en el siguiente producto:\n\n" .
                                    "📌 Producto: {$product->name}\n" .
                                    "💰 Precio: $ {$product->price}\n" .
                                    "📦 Stock disponible: {$product->stock}\n\n" .
                                    "¿Me brindan más información?"
                                );
                            @endphp

                            <a href="https://wa.me/{{ $company->phone }}?text={{ $message }}" target="_blank"
                                class="btn product-btn-buy w-50">
                                <i class="bi bi-cart3 me-1"></i>
                                Comprar
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="productModal-{{ $product->id }}" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content rounded-4">

                        <!-- HEADER -->
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $product->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- BODY -->
                        <div class="modal-body">
                            <div class="row g-4">

                                <!-- IMÁGENES -->
                                <div class="col-md-6">
                                    <img id="mainImage-{{ $product->id }}"
                                        src="{{ asset('storage/' . $images->first()) }}"
                                        class="img-fluid rounded mb-3 w-50 d-flex m-auto">

                                    <div class="d-flex gap-2 flex-wrap">
                                        @foreach($images as $img)
                                            <img src="{{ asset('storage/' . $img) }}"
                                                class="img-thumbnail"
                                                style="width: 70px; cursor:pointer"
                                                onclick="document.getElementById('mainImage-{{ $product->id }}').src=this.src">
                                        @endforeach
                                    </div>
                                </div>

                                <!-- INFO -->
                                <div class="col-md-6">

                                    <!-- RATING -->
                                    <div class="mb-2 text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>

                                    <p class="mb-1">
                                        <strong>Marca:</strong> {{ $product->brand->name ?? 'Genérica' }}
                                    </p>

                                    <p class="mb-1">
                                        <strong>Categoría:</strong> {{ $product->taxonomy->name ?? 'General' }}
                                    </p>

                                    <!-- <p class="mt-3">
                                         Str::markdown(product->description) 
                                    </p> -->
                                    <div class="product-description mt-3"
                                        data-max-chars="500">

                                        <div class="description-content">
                                            {!! Str::markdown($product->description) !!}
                                        </div>

                                    </div>


                                    <h4 class="mt-3 text-success">
                                        $ {{ number_format($product->price, 3) }}
                                    </h4>

                                    <p class="text-muted">
                                        Stock disponible: {{ $product->stock }}
                                    </p>

                                    <!-- CANTIDAD -->
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <label>Cantidad:</label>
                                        <input type="number"
                                            min="1"
                                            max="{{ $product->stock }}"
                                            value="1"
                                            class="form-control w-25"
                                            id="qty-{{ $product->id }}">
                                    </div>

                                    <!-- BOTÓN WHATSAPP -->
                                    @php
                                        $whatsappNumber = config('app.whatsapp_number');
                                    @endphp

                                    <a href="#"
                                    onclick="sendWhatsapp({{ $product->id }})"
                                    class="btn product-btn-buy">
                                        <i class="bi bi-whatsapp me-1"></i>
                                        Comprar por WhatsApp
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="text-center mt-4">
                <a href="/tienda" class="btn product-btn-buy">
                    Ver todos los productos
                </a>
            </div>

        </div>
    </div>
</section>

<section class="programming-section mb-5">
    <div class="container">

        <!-- TITULO -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="programming-title">
                    Programación
                </h2>
                <span class="programming-subtitle">
                    Descubre nuestros servicios únicos diseñados para satisfacer todas tus necesidades
                </span>
            </div>
        </div>

        <!-- CARDS -->
        <div class="row g-4 justify-content-center">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="programming-card text-center">

                    <div class="programming-icon">
                        <i class="bi bi-globe"></i>
                    </div>

                    <h5 class="programming-card-title">
                        Presencia en línea
                    </h5>

                    <span class="programming-card-text">
                        Permite a las empresas a tener una presencia en línea profesional y funcional
                    </span>

                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="programming-card text-center">

                    <div class="programming-icon">
                        <i class="bi bi-ui-checks-grid"></i>
                    </div>

                    <h5 class="programming-card-title">
                        Experiencia de usuario
                    </h5>

                    <span class="programming-card-text">
                        Mejora la interactividad mediante interfaces atractivas y funcionalidades dinámicas
                    </span>

                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="programming-card text-center">

                    <div class="programming-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>

                    <h5 class="programming-card-title">
                        Escalabilidad
                    </h5>

                    <span class="programming-card-text">
                        Facilita la expansión y mejora de sitios web y aplicaciones según las necesidades del negocio
                    </span>

                </div>
            </div>

        </div>
    </div>
</section>


@include('partials.footer')

<script>
    function sendWhatsapp(productId) {
        const qty = document.getElementById('qty-' + productId).value;

        const products = @json($products->keyBy('id'));

        const product = products[productId];

        let message =
            `Hola, deseo comprar el siguiente producto:\n\n` +
            `📌 Producto: ${product.name}\n` +
            `💰 Precio unitario: $ ${product.price}\n` +
            `📦 Cantidad: ${qty}\n` +
            `💵 Total: $ ${product.price * qty}\n\n` +
            `¿Está disponible?`;

        const url = `https://wa.me/{{ config('app.whatsapp_number') }}?text=${encodeURIComponent(message)}`;

        window.open(url, '_blank');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('.product-description').forEach(wrapper => {

            const maxChars = parseInt(wrapper.dataset.maxChars || 500);
            const content = wrapper.querySelector('.description-content');

            const temp = document.createElement('div');
            temp.innerHTML = content.innerHTML;

            if (temp.textContent.trim().length <= maxChars) return;

            // 🔥 colapsar desde el inicio
            content.classList.add('collapsed');

            const toggle = document.createElement('a');
            toggle.href = 'javascript:void(0)';
            toggle.className = 'read-more d-inline-block mt-2';
            toggle.textContent = 'Leer más';

            toggle.addEventListener('click', () => {
                const expanded = content.classList.toggle('expanded');
                content.classList.toggle('collapsed');
                toggle.textContent = expanded ? 'Ocultar Descripción' : 'Leer Descripción';
            });

            wrapper.appendChild(toggle);
        });

    });
</script>






@endsection
