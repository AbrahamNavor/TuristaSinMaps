@extends('layouts.nav')

@section('titulo', 'Reservacion')

@section('nav')

    <div class="container mt-5">
        <div class="box">
            <div class="alert alert-info mt-3">
                <strong>Nota:</strong> No se puede cancelar una reservación con menos de 72 horas de anticipación.
            </div>
            <div class="box-header">
                <h2>Historial de Reservaciones</h2>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Número de Vuelo</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de Salida</th>
                                <th>Fecha de Llegada</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vuelos as $vuelo)
                                <tr>
                                    <td>{{ $vuelo->vuelo }}</td>
                                    <td>{{ $vuelo->origen }}</td>
                                    <td>{{ $vuelo->destino }}</td>
                                    <td>{{ $vuelo->fecha_salida }}</td>
                                    <td>{{ $vuelo->fecha_regreso }}</td>
                                    <td>{{ $vuelo->precio }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="#" class="btn btn-primary w-100">Generar PDF</a>
    </div>
@endsection
