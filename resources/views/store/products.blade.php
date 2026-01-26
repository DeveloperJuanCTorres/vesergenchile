<!-- TOP BAR -->
<div class="shop-products-top">
    <span class="shop-count">
        {{ $products->total() }} productos
    </span>

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
        <div class="col-xl-4 col-lg-4 col-md-6 product-item">
            @include('store.product-card', ['product' => $product,'view' => request('view', 'grid')])
        </div>
    @endforeach

</div>

<!-- PAGINACION -->
<div class="mt-4">
    {{ $products->withQueryString()->links() }}
</div>
