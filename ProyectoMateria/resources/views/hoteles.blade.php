@extends('layouts.nav')

@section('titulo', 'Busqueda Hoteles')

@section('nav')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="GET">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="destino">Destino</label>
                        <input type="text" class="form-control" id="destino" name="destino" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="checkin">Fecha de Check-in</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="checkout">Fecha de Check-out</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                    <div class="form-group col-md-6">
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
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="ruta/a/imagen_hotel1.jpg" class="card-img-top" alt="Imagen del hotel">
                <div class="card-body">
                    <h5 class="card-title">Hotel 1</h5>
                    <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★★☆</p>
                    <p class="card-text"><strong>Número de estrellas:</strong> 4</p>
                    <p class="card-text"><strong>Precio por noche:</strong> $150</p>
                    <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 5</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="ruta/a/imagen_hotel2.jpg" class="card-img-top" alt="Imagen del hotel">
                <div class="card-body">
                    <h5 class="card-title">Hotel 2</h5>
                    <p class="card-text"><strong>Calificación de usuarios:</strong> ★★★☆☆</p>
                    <p class="card-text"><strong>Número de estrellas:</strong> 3</p>
                    <p class="card-text"><strong>Precio por noche:</strong> $100</p>
                    <p class="card-text"><strong>Disponibilidad de habitaciones:</strong> 8</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection