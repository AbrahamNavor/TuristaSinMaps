@extends('layouts.nav')

@section('titulo', 'Vuelos Disponibles')

@section('nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Vuelos Disponibles</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Filtros de Búsqueda
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rutaBuscarVuelos') }}" method="GET" class="row g-3">
                            @csrf
                            <div class="col-md-2">
                                <label for="origen" class="form-label">Origen</label>
                                <input type="text" class="form-control" name="txtorigen" placeholder="Ciudad de origen">
                            </div>
                            <div class="col-md-2">
                                <label for="destino" class="form-label">Destino</label>
                                <input type="text" class="form-control" name="txtdestino"
                                    placeholder="Ciudad de destino">
                            </div>
                            <div class="col-md-2">
                                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                                <input type="date" class="form-control" name="txtfecha_salida">
                            </div>
                            <div class="col-md-2">
                                <label for="fecha_regreso" class="form-label">Fecha de Regreso</label>
                                <input type="date" class="form-control" name="txtfecha_regreso">
                            </div>
                            <div class="col-md-2">
                                <label for="asientos_disponibles" class="form-label">Asientos Disponibles</label>
                                <input type="number" class="form-control" name="txtasientos">
                            </div>
                            <div class="col-md-2 align-self-end">
                                <button type="submit" class="btn btn-primary w-100">Buscar Vuelos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Resultados de la búsqueda:</h2>

                @if ($vuelos->isEmpty())
                    <p>No se encontraron vuelos que coincidan con los criterios de búsqueda.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Fecha de salida</th>
                                <th>Fecha de regreso</th>
                                <th>Asientos</th>
                                <th>Disponibilidad</th>
                                <th>Clase</th>
                                <th>Aerolínea</th>
                                <th>Horario de salida</th>
                                <th>Horario de llegada</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vuelos as $vuelo)
                                <tr>
                                    <td>{{ $vuelo->origen }}</td>
                                    <td>{{ $vuelo->destino }}</td>
                                    <td>{{ $vuelo->fecha_salida }}</td>
                                    <td>{{ $vuelo->fecha_regreso }}</td>
                                    <td>{{ $vuelo->asientos }}</td>
                                    <td>
                                        @if ($vuelo->asientos > 0)
                                            <span class="text-success">Disponible</span>
                                        @else
                                            <span class="text-danger">No disponible</span>
                                        @endif
                                    </td>
                                    <td>{{ $vuelo->clase }}</td>
                                    <td>{{ $vuelo->aerolinea }}</td>
                                    <td>{{ $vuelo->horario_salida }}</td>
                                    <td>{{ $vuelo->horario_llegada }}</td>
                                    <td>${{ number_format($vuelo->precio, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($vuelos as $vuelo)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://picsum.photos/700/400?random={{ $loop->index }}" class="card-img-top"
                            alt="Imagen del vuelo">
                        <div class="card-body text-center">
                            <h5 class="card-title">Vuelo: {{ $vuelo->vuelo }}</h5>
                            <p class="card-text"><strong>Origen:</strong> {{ $vuelo->origen }}</p>
                            <p class="card-text"><strong>Destino:</strong> {{ $vuelo->destino }}</p>
                            <p class="card-text"><strong>Fecha Salida:</strong> {{ $vuelo->fecha_salida }}</p>
                            <p class="card-text"><strong>Fecha Regreso:</strong> {{ $vuelo->fecha_regreso }}</p>
                            <p class="card-text"><strong>Horario Salida:</strong> {{ $vuelo->horario_salida }}</p>
                            <p class="card-text"><strong>Horario Llegada:</strong> {{ $vuelo->horario_llegada }}</p>
                            <p><strong>Asientos:</strong> {{ $vuelo->asientos }}</p>
                            <p>
                                <strong>Disponibilidad:</strong>
                                @if ($vuelo->asientos > 0)
                                    <span class="text-success">Disponible</span>
                                @else
                                    <span class="text-danger">No disponible</span>
                                @endif
                            </p>
                            <p class="card-text"><strong>Precio:</strong> ${{ $vuelo->precio }}</p>
                            <a href="{{ route('verMasVuelo',$vuelo->id) }}">Ver más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No hay vuelos disponibles en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
