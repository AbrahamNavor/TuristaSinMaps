@extends('layouts.nav')

@section('titulo', 'Registro de Hotel')

@section('nav')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        @if(session('exito'))
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
        <div class="col-md-10">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.221);">
                
                <div class="card-header" style="font-size: 1.5rem; font-weight: bold;">Registro de Hoteles</div>
                
                <div class="card-body">
                    <form action="{{ route('procesarRegistroHotel') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre del Hotel</label>
                            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección del Hotel</label>
                            <input type="text" class="form-control" name="txtdireccion" value="{{ old('txtdireccion') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtdireccion') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono del Hotel</label>
                            <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="habitaciones_disponibles">Número de Habitaciones Disponibles</label>
                            <input type="number" class="form-control" name="txthabitaciones" value="{{ old('txthabitaciones') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txthabitaciones') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoría del Hotel</label>
                            <select class="form-control" name="txtcategoria">
                                <option value="1 estrella" {{ old('txtcategoria') == '1 estrella' ? 'selected' : '' }}>1 Estrella</option>
                                <option value="2 estrellas" {{ old('txtcategoria') == '2 estrellas' ? 'selected' : '' }}>2 Estrellas</option>
                                <option value="3 estrellas" {{ old('txtcategoria') == '3 estrellas' ? 'selected' : '' }}>3 Estrellas</option>
                                <option value="4 estrellas" {{ old('txtcategoria') == '4 estrellas' ? 'selected' : '' }}>4 Estrellas</option>
                                <option value="5 estrellas" {{ old('txtcategoria') == '5 estrellas' ? 'selected' : '' }}>5 Estrellas</option>
                            </select>
                            <small class="text-danger fst-italic">{{ $errors->first('txtcategoria') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="servicios">Servicios del Hotel</label>
                            <input type="text" class="form-control" name="txtservicios" value="{{ old('txtservicios') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtservicios') }}</small>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="#" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
