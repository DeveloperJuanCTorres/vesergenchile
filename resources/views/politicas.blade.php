@extends('layouts.app')

@section('content')

<section>
    <div class="container" style="margin-top: 100px;">
        <div class="py-4">
            @if($politicas)
            {!! Str::markdown($politicas->description) !!}
            @else
            <div class="text-center">
                <span class="text-center">Sin Políticas de Privacidad</span>
            </div>
            @endif
        </div>
    </div>
</section>

@include('partials.footer')
@endsection