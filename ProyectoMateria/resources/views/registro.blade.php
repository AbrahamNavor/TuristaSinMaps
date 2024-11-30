@extends('layouts.nav')

@section('titulo', 'Registro de Reservaciones')

@section('nav')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-10">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.221);">
                
                <div class="card-header">Registro de Reservaciones</div>
                
                <div class="card-body">
                    <br>
                    <form action="{{ route('rutaprocesarRegistro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">
                            @error('apellido')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                            @error('telefono')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fecha_reservacion">Fecha de Reservación</label>
                            <input type="date" class="form-control" id="fecha_reservacion" name="fecha_reservacion" value="{{ old('fecha_reservacion') }}">
                            @error('fecha_reservacion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hora_reservacion">Hora de Reservación</label>
                            <input type="time" class="form-control" id="hora_reservacion" name="hora_reservacion" value="{{ old('hora_reservacion') }}">
                            @error('hora_reservacion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="numero_personas">Número de Personas</label>
                            <input type="number" class="form-control" id="numero_personas" name="numero_personas" value="{{ old('numero_personas') }}">
                            @error('numero_personas')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="numero_vuelo">Número de Vuelo</label>
                            <input type="text" class="form-control" id="numero_vuelo" name="numero_vuelo" value="{{ old('numero_vuelo') }}">
                            @error('numero_vuelo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hotel">Hotel</label>
                            <input type="text" class="form-control" id="hotel" name="hotel" value="{{ old('hotel') }}">
                            @error('hotel')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div><br>

                        <button type="submit" class="btn btn-success">Registrar Reservación</button>
                        <a href="#" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
