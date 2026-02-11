<!-- TOP BAR -->
<div class="shop-products-top">
    <span class="shop-count">
        {{ $products->total() }} productos
    </span>

    @if(request('search'))
        <span class="text-muted small">
            Resultados para: <strong>"{{ request('search') }}"</strong>
        </span>
    @endif

    <div class="shop-view-buttons">
        <button class="view-btn active" data-view="grid">
            <i class="bi bi-grid-3x3-gap"></i>
        </button>
        <button class="view-btn" data-view="list">
            <i class="bi bi-list"></i>
        </button>
    </div>
</div>

<!-- PRODUCTOS -->
<div id="productsContainer" class="row g-4 products-grid">

    @foreach($products as $product)
        @php
            $images = collect(json_decode($product->images));
        @endphp
        <div class="col-xl-4 col-lg-4 col-md-6 product-item">
            @include('store.product-card', ['product' => $product,'view' => request('view', 'grid')])
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
                                    $ {{ number_format($product->price, 2) }} - USD {{ number_format($product->price_dolar, 2) }}
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

</div>

<!-- PAGINACION -->
<div class="mt-4 d-flex justify-content-center">
    {{ $products->withQueryString()->links() }}
</div>
