@extends('layouts.nav')

@section('titulo', 'Ver mas')

@section('nav')

<div class="container d-flex justify-content-center">
    <div class="w-75">
        <h1 class="text-center">Detalles del Vuelo</h1>
        <div class="card">
            <div class="card-header text-center">
                <h2>Vuelo 1234</h2>
            </div>
            <div class="card-body text-center">
                <img src="https://picsum.photos/350/200?random" class="img-fluid mb-3" alt="Imagen del vuelo">
                <p><strong>Aerolínea:</strong> Air Example</p>
                <p><strong>Origen:</strong> Ciudad de México</p>
                <p><strong>Destino:</strong> Nueva York</p>
                <p><strong>Fecha de Salida:</strong> 2023-11-01</p>
                <p><strong>Fecha de Llegada:</strong> 2023-11-01</p>
                <p><strong>Precio:</strong> $500 USD</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('rutavuelos') }}" class="btn btn-primary mt-3">Volver a la lista de vuelos</a>
        </div>
    </div>
</div>

@endsection