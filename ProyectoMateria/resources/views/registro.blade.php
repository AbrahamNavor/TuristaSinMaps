@extends('layouts.nav')

@section('titulo', 'Registro de Reservaciones')

@section('nav')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-10">
            <div class="card">
                @session('exito')
                    <script>Swal.fire({
                    title: "Registro exitoso",
                    text: "{{$value}}",
                    icon: "success"
                    });</script> 
                @endsession
                <div class="card-header">Registro de Reservaciones</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" >
                            <small>{{ $errors->first('nombre') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" >
                            <small>{{ $errors->first('nombre') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" >
                            <small>{{ $errors->first('email') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" >
                            <small>{{ $errors->first('telefono') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="fecha_reservacion">Fecha de Reservación</label>
                            <input type="date" class="form-control" id="fecha_reservacion" name="fecha_reservacion" >
                            <small>{{ $errors->first('fecha_reservacion') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="hora_reservacion">Hora de Reservación</label>
                            <input type="time" class="form-control" id="hora_reservacion" name="hora_reservacion" >
                            <small>{{ $errors->first('hora_reservacion') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="numero_personas">Número de Personas</label>
                            <input type="number" class="form-control" id="numero_personas" name="numero_personas" >
                            <small>{{ $errors->first('numero_personas') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="numero_vuelo">Número de Vuelo</label>
                            <input type="text" class="form-control" id="numero_vuelo" name="numero_vuelo" >
                            <small>{{ $errors->first('numero_vuelo') }}</small>
                        </div>
                        <div class="form-group">
                            <label for="hotel">Hotel</label>
                            <input type="text" class="form-control" id="hotel" name="hotel" >
                            <small>{{ $errors->first('hotel') }}</small>
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