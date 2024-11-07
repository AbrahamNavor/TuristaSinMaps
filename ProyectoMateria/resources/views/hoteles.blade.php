@extends('layouts.nav')

@section('titulo', 'Busqueda Hoteles')

@section('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Busqueda de Hoteles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Filtros de Búsqueda
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="destino">Destino</label>
                                <input type="text" class="form-control" id="destino" name="destino" required>
                            </div>
                            <div class="form-group">
                                <label for="checkin">Fecha de Check-in</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="checkout">Fecha de Check-out</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" required>
                            </div>
                            <div class="form-group">
                                <label for="habitaciones">Número de Habitaciones</label>
                                <input type="number" class="form-control" id="habitaciones" name="habitaciones" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="adultos">Número de Adultos</label>
                                <input type="number" class="form-control" id="adultos" name="adultos" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ninos">Número de Niños</label>
                                <input type="number" class="form-control" id="ninos" name="ninos" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="categoria">Categoría del Hotel</label>
                                <select class="form-control" id="categoria" name="categoria">
                                    <option value="">Seleccione</option>
                                    <option value="1">1 Estrella</option>
                                    <option value="2">2 Estrellas</option>
                                    <option value="3">3 Estrellas</option>
                                    <option value="4">4 Estrellas</option>
                                    <option value="5">5 Estrellas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="precio">Precio Máximo</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="distancia">Distancia al Centro (km)</label>
                                <input type="number" class="form-control" id="distancia" name="distancia">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="servicios">Servicios</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wifi" name="servicios[]" value="wifi">
                                    <label class="form-check-label" for="wifi">WiFi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="piscina" name="servicios[]" value="piscina">
                                    <label class="form-check-label" for="piscina">Piscina</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="desayuno" name="servicios[]" value="desayuno">
                                    <label class="form-check-label" for="desayuno">Desayuno Incluido</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 1</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★☆</p>
                            <p class="card-text"><strong>Número de estrellas:</strong> 4</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $150</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 5</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 2</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★☆☆</p>
                            <p class="card-text"><strong>Número de estrellas:</strong>3</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $100</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 8</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 3</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★★</p>
                            <p class="card-text"><strong>Número de estrellas:</strong> 5</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $200</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 3</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 4</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★☆</p>
                            <p class="card-text"><strong>Número de estrellas:</strong> 4</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $150</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 5</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 5</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★☆☆</p>
                            <p class="card-text"><strong>Número de estrellas:</strong> 3</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $100</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 8</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/700/400?random" class="card-img-top" alt="Imagen del hotel">
                        <div class="card-body">
                            <h5 class="card-title">Hotel 6</h5>
                            <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★★</p>
                            <p class="card-text"><strong>Número de estrellas:</strong> 5</p>
                            <p class="card-text"><strong>Precio por noche:</strong> $200</p>
                            <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 3</p>
                            <a href="{{ route('rutavermashotel') }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
