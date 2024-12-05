@extends('layouts.nav')

@section('titulo', 'Ver más Vuelo')

@section('nav')

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <h1 class="text-center">Detalles del Vuelo</h1>
            <div class="card">

                <div class="card-header text-center">
                    <h2>{{ $vuelo->nombre }}</h2>
                </div>
                <div class="card-body text-center">
                    <img src="https://picsum.photos/350/200?random" class="img-fluid mb-3" alt="Imagen del Vuelo">
                    <p>Vuelo: {{ $vuelo->vuelo }}</p>
                    <p><strong>Origen:</strong> {{ $vuelo->origen }}</p>
                    <p><strong>Destino:</strong> {{ $vuelo->destino }}</p>
                    <p><strong>Fecha Salida:</strong> {{ $vuelo->fecha_salida }}</p>
                    <p><strong>Fecha Regreso:</strong> {{ $vuelo->fecha_regreso }}</p>
                    <p><strong>Asientos:</strong>{{$vuelo->asientos}}</p>
                    <p>
                        <strong>Disponibilidad:</strong>
                        @if ($vuelo->asientos > 0)
                            <span class="text-success">Disponible</span>
                        @else
                            <span class="text-danger">No disponible</span>
                        @endif
                    </p>
                    <p><strong>Clase:</strong> {{ $vuelo->clase }}</p>
                    <p><strong>Aerolinea:</strong> {{ $vuelo->aerolinea }}</p>
                    <p><strong>Horario Salida:</strong> {{ $vuelo->horario_salida }}</p>
                    <p><strong>Horario Llegada:</strong> {{ $vuelo->horario_llegada }}</p>
                    <p><strong>Precio:</strong> ${{ $vuelo->precio }}</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Volver a la vista anterior.</a>
            </div>
        </div>
    </div>

@endsection
