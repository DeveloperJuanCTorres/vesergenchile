@extends('layouts.app')

@section('content')

<section class="shop-section">
    <div class="container">

        <!-- TITULO -->
        <div class="row mb-4">
            <div class="col-12">
                <h3 class="shop-title">Licencias digitales</h3>
                <span class="shop-subtitle">
                    Herramientas profesionales para estudio y trabajo
                </span>
            </div>
        </div>

        <div class="row">

            <!-- FILTROS -->
            <div class="col-lg-3 mb-4">
                @include('store.filters')
            </div>

            <!-- PRODUCTOS -->
            <div class="col-lg-9">
                @include('store.products')
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
            toggle.textContent = 'Leer Descripción';

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