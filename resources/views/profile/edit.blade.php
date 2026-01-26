@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="card shadow rounded-4 p-4">
        <h4 class="fw-bold mb-3">Mi perfil</h4>

        <div class="mb-2">
            <strong>Nombre:</strong> {{ $user->name }}
        </div>

        <div class="mb-2">
            <strong>Email:</strong> {{ $user->email }}
        </div>

        <div class="mt-4">
            <a href="#" class="btn btn-primary rounded-pill">
                Editar perfil
            </a>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
