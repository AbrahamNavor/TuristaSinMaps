@extends('layouts.nav')

@section('titulo', 'Ver más Hotel')

@section('nav')

<div class="container d-flex justify-content-center">
    <div class="w-75">
        <h1 class="text-center">Detalles del Hotel</h1>
        <div class="card">
            <div class="card-header text-center">
                <h2>Hotel Ejemplo</h2>
            </div>
            <div class="card-body text-center">
                <img src="https://picsum.photos/350/200?random" class="img-fluid mb-3" alt="Imagen del hotel">
                <p><strong>Nombre:</strong> Hotel Ejemplo</p>
                <p><strong>Ubicación:</strong> Ciudad de México</p>
                <p><strong>Calificación:</strong> 4.5 estrellas</p>
                <p><strong>Precio por noche:</strong> $150 USD</p>
                <p><strong>Descripción:</strong> Un hotel de lujo con todas las comodidades.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('rutahoteles') }}" class="btn btn-primary mt-3">Volver a la lista de hoteles</a>
        </div>
    </div>
</div>

@endsection