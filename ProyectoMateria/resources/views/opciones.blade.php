@extends('layouts.nav')

@section('titulo', 'Opciones')

@section('nav')
<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('rutavuelos') }}" class="btn btn-success btn-lg w-100">
                        <i class="fas fa-plane"></i> Vuelos
                    </a>
                    <p class="mt-2">Encuentra los mejores vuelos a tu destino.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('rutahoteles') }}" class="btn btn-success btn-lg w-100">
                        <i class="fas fa-hotel"></i> Hoteles
                    </a>
                    <p class="mt-2">Reserva los mejores hoteles al mejor precio.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('rutaregistro') }}" class="btn btn-success btn-lg w-100">
                        <i class="fas fa-book"></i> Reservaciones
                    </a>
                    <p class="mt-2">Gestiona todas tus reservaciones fácilmente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection