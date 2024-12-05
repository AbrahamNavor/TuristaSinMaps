@extends('layouts.nav')

@section('titulo', 'Busqueda Hoteles')

@section('nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Busqueda de Hoteles</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Filtros de Búsqueda
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rutaBuscarHoteles') }}" method="GET" class="row g-3">
                            @csrf
                            <div class="col-md-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txtnombre">
                            </div>
                            <div class="col-md-2">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="txtdireccion">
                            </div>
                            <div class="col-md-2">
                                <label for="habitaciones">Número de Habitaciones</label>
                                <input type="number" class="form-control" name="txthabitaciones">
                            </div>
                            <div class="col-md-2">
                                <label for="categoria" class="form-label">Categoría del Hotel</label>
                                <select class="form-control" name="txtcategoria">
                                    <option value=""></option>
                                    <option value="1 estrella">1 Estrella</option>
                                    <option value="2 estrellas">2 Estrellas</option>
                                    <option value="3 estrellas">3 Estrellas</option>
                                    <option value="4 estrellas">4 Estrellas</option>
                                    <option value="5 estrellas">5 Estrellas</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="precio" class="form-label">Precio Máximo</label>
                                <input type="number" class="form-control" name="txtprecio">
                            </div>
                            <div class="col-md-2 align-self-end">
                                <button type="submit" class="btn btn-primary w-100">Buscar Hoteles</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Resultados de la búsqueda:</h2>

                @if ($hoteles->isEmpty())
                    <p>No se encontraron hoteles que coincidan con los criterios de búsqueda.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Disponibilidad de habitaciones</th>
                                <th>Categoria</th>
                                <th>Precio por noche</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hoteles as $hotel)
                                <tr>
                                    <td>{{ $hotel->nombre }}</td>
                                    <td>{{ $hotel->direccion }}</td>
                                    <td>{{ $hotel->habitaciones }}</td>
                                    <td>
                                        @if ($hotel->habitaciones > 0)
                                            <span class="text-success">Disponible</span>
                                        @else
                                            <span class="text-danger">No disponible</span>
                                        @endif
                                    </td>
                                    <td>{{ $hotel->categoria }}</td>
                                    <td>${{ number_format($hotel->precio, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            @forelse ($hoteles as $hotel)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://picsum.photos/700/400?random={{ $loop->index }}" class="card-img-top"
                            alt="Imagen del hotel">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hotel: {{ $hotel->nombre }}</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★☆</p>
                            <p class="card-text"><strong>Precio por noche:</strong> ${{ $hotel->precio }}</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong>
                                {{ $hotel->habitaciones }}</p>
                            <p class="card-text"><strong>Servicios:</strong> {{ $hotel->servicios }}</p>
                            <p class="card-text"><strong>Dirección:</strong> {{ $hotel->direccion }}</p>
                            <a href="{{ route('verHotel', $hotel->id) }}">Ver más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No hay hoteles disponibles en este momento.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
