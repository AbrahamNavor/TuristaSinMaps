@extends('layouts.nav')

@section('titulo', 'Busqueda Vuelos')

@section('nav')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Busqueda de Vuelos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Filtros de Búsqueda
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="origen" class="form-label">Origen</label>
                                <input type="text" class="form-control" id="origen" name="origen">
                            </div>
                            <div class="mb-3">
                                <label for="destino" class="form-label">Destino</label>
                                <input type="text" class="form-control" id="destino" name="destino">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_regreso" class="form-label">Fecha de Regreso</label>
                                <input type="date" class="form-control" id="fecha_regreso" name="fecha_regreso">
                            </div>
                            <div class="mb-3">
                                <label for="pasajeros" class="form-label">Número de Pasajeros</label>
                                <input type="number" class="form-control" id="pasajeros" name="pasajeros" min="1">
                            </div>
                            <div class="mb-3">
                                <label for="clase" class="form-label">Clase</label>
                                <select class="form-control" id="clase" name="clase">
                                    <option value="economica">Económica</option>
                                    <option value="ejecutiva">Ejecutiva</option>
                                    <option value="primera_clase">Primera Clase</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="aerolinea" class="form-label">Aerolínea</label>
                                <input type="text" class="form-control" id="aerolinea" name="aerolinea">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio Máximo</label>
                                <input type="number" class="form-control" id="precio" name="precio" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="escalas" class="form-label">Número de Escalas</label>
                                <input type="number" class="form-control" id="escalas" name="escalas" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="horario_salida" class="form-label">Horario de Salida</label>
                                <input type="time" class="form-control" id="horario_salida" name="horario_salida">
                            </div>
                            <div class="mb-3">
                                <label for="horario_llegada" class="form-label">Horario de Llegada</label>
                                <input type="time" class="form-control" id="horario_llegada" name="horario_llegada">
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen1.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 1</h5>
                                <p class="card-text">Descripción del vuelo 1.</p>
                                <p class="card-text"><strong>Costo:</strong> $100</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★★☆</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen2.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 2</h5>
                                <p class="card-text">Descripción del vuelo 2.</p>
                                <p class="card-text"><strong>Costo:</strong> $200</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★☆☆</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen2.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 3</h5>
                                <p class="card-text">Descripción del vuelo 2.</p>
                                <p class="card-text"><strong>Costo:</strong> $200</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★☆☆</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen2.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 4</h5>
                                <p class="card-text">Descripción del vuelo 2.</p>
                                <p class="card-text"><strong>Costo:</strong> $200</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★☆☆</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen2.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 5</h5>
                                <p class="card-text">Descripción del vuelo 2.</p>
                                <p class="card-text"><strong>Costo:</strong> $200</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★☆☆</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="ruta/a/imagen2.jpg" class="card-img-top" alt="Imagen de vuelo">
                            <div class="card-body">
                                <h5 class="card-title">Vuelo 6</h5>
                                <p class="card-text">Descripción del vuelo 2.</p>
                                <p class="card-text"><strong>Costo:</strong> $200</p>
                                <p class="card-text"><strong>Reseñas:</strong> ★★★☆☆</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection