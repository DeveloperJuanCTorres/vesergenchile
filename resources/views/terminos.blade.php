@extends('layouts.app')

@section('content')

<section>
    <div class="container" style="margin-top: 100px;">
        <div class="py-4">
            @if($terminos)
            {!! Str::markdown($terminos->description) !!}
            @else
            <div class="text-center">
                <span>Sin Términos y Condiciones</span>
            </div>
            @endif
        </div>
    </div>
</section>

@include('partials.footer')
@endsection