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
            <div class="col-12">
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
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>
@endsection