@extends('layouts.nav')

@section('titulo', 'Ver más Hotel')

@section('nav')

<div class="container d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
        <h1 class="text-center">Detalles del Hotel</h1>
        <div class="card">
            <div class="card-header text-center">
                <h2>{{ $hotel->nombre }}</h2>
            </div>
            <div class="card-body text-center">
                <img src="https://picsum.photos/350/200?random" class="img-fluid mb-3" alt="Imagen del hotel">
                <p><strong>Nombre:</strong> {{ $hotel->nombre }}</p>
                <p><strong>Ubicación:</strong> {{ $hotel->direccion }}</p>
                <p><strong>Teléfono:</strong> {{ $hotel->telefono }}</p>
                <p><strong>Habitaciones:</strong> {{ $hotel->habitaciones }}</p>
                <p>
                    <strong>Disponibilidad:</strong>
                    @if ($hotel->habitaciones > 0)
                        <span class="text-success">Disponible</span>
                    @else
                        <span class="text-danger">No disponible</span>
                    @endif
                </p>
                <p><strong>Calificación:</strong> {{ $hotel->categoria }}</p>
                <p><strong>Precio por noche:</strong> ${{ $hotel->precio }} USD</p>
                <p><strong>Servicios:</strong> {{ $hotel->servicios }}</p>
                <p><strong>Descripción:</strong> {{ $hotel->descripcion }}</p>
                <p><strong>Políticas:</strong> {{ $hotel->politicas }}</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Volver a la vista anterior</a>
        </div>
    </div>
</div>

@endsection
