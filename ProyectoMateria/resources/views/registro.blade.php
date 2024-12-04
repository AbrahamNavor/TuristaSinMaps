@extends('layouts.nav')

@section('titulo', 'Registro de Reservaciones')

@section('nav')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        @if (session('exito'))
            <script>
                Swal.fire({
                    title: "Respuesta del servidor",
                    text: "{{ session('exito') }}",
                    icon: "success"
                });
            </script>
        @endif
        <div class="row justify-content-center w-100">
            <br>
            <div class="col-md-8">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.221);">

                    <div class="card-header" style="font-size: 1.5rem; font-weight: bold;">Registro de Reservaciones</div>

                    <div class="card-body">
                        <form action="{{ route('procesarRegistro') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtemail') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input type="tel" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_reservacion">Fecha de Reservación</label>
                                        <input type="date" class="form-control" name="txtreservacion" value="{{ old('txtreservacion') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtreservacion') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="hora_reservacion">Hora de Reservación</label>
                                        <input type="time" class="form-control" name="txthora" value="{{ old('txthora') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txthora') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="numero_personas">Número de Personas</label>
                                        <input type="number" class="form-control" name="txtpersonas" value="{{ old('txtpersonas') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtpersonas') }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="numero_vuelo">Número de Vuelo</label>
                                        <input type="text" class="form-control" name="txtvuelo" value="{{ old('txtvuelo') }}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtvuelo') }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="hotel">Hotel</label>
                                <input type="text" class="form-control" name="txthotel" value="{{ old('txthotel') }}">
                                <small class="text-danger fst-italic">{{ $errors->first('txthotel') }}</small>
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
