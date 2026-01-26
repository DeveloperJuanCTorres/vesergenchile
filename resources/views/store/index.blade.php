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

@endsection