@props([
    'product',
    'view' => 'grid' // grid | list
])

@if($view === 'grid')
    <!-- ===== GRID CARD ===== -->
    <!-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4"> -->
        <div class="product-card">

                    <!-- IMAGEN -->
                    <div class="product-image-wrapper">
                        <span class="product-badge">PROMO</span>
                        
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
    <!-- </div> -->

@else
    <!-- ===== LIST / LINEAL CARD ===== -->
    <div class="col-12 mb-3">
        <div class="card product-card border-0 shadow-sm rounded-4">
            <div class="row g-0 align-items-center">

                <!-- Imagen -->
                <div class="col-md-3">
                    <img src="{{ $product->image_url }}"
                         class="img-fluid rounded-start-4"
                         alt="{{ $product->name }}">
                </div>

                <!-- Contenido -->
                <div class="col-md-9">
                    <div class="card-body">

                        <span class="text-muted small">
                            {{ $product->category->name ?? 'General' }}
                        </span>

                        <h5 class="fw-bold mt-1">
                            {{ $product->name }}
                        </h5>

                        <p class="text-muted mb-2">
                            {{ Str::limit($product->short_description, 140) }}
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-4 text-primary">
                                S/ {{ number_format($product->price, 2) }}
                            </span>

                            <a href="{{ route('shop.show', $product->slug) }}"
                               class="btn btn-primary rounded-pill px-4">
                                Ver producto
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endif
