<form method="GET" action="{{ route('store.index') }}" class="filter-card">

    <!-- HEADER -->
    <div class="filter-header">
        <div>
            <i class="bi bi-funnel"></i>
            <span>Filtro</span>
        </div>
        <a href="{{ route('store.index') }}" class="filter-clear">Borrar</a>
    </div>

    <!-- PRECIO -->
    <div class="filter-group">
        <h6>Rango de precio</h6>

        <input type="range"
               class="form-range"
               min="0"
               max="100000"
               step="5000"
               name="price"
               value="{{ request('price', 100000) }}">

        <div class="filter-price-value">
            Hasta $ {{ number_format(request('price', 100000)) }} CLP
        </div>
    </div>

    <!-- MARCAS -->
    <div class="filter-group">
        <h6>Marcas</h6>

        @foreach($brands as $brand)
            <label class="filter-option">
                <input type="radio"
                       name="brand"
                       value="{{ $brand->id }}"
                       {{ request('brand') == $brand->id ? 'checked' : '' }}>
                {{ $brand->name }}
            </label>
        @endforeach
    </div>

    <!-- CATEGORIAS -->
    <div class="filter-group">
        <h6>Categorías</h6>

        @foreach($categories as $category)
            <label class="filter-option">
                <input type="radio"
                       name="category"
                       value="{{ $category->id }}"
                       {{ request('category') == $category->id ? 'checked' : '' }}>
                {{ $category->name }}
            </label>
        @endforeach
    </div>

    <button type="submit" class="btn filter-apply">
        Aplicar filtros
    </button>
</form>
