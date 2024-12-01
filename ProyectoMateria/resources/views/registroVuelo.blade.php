@extends('layouts.nav')

@section('titulo', 'Registro de Vuelos')

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
                
                <div class="card-header" style="font-size: 1.5rem; font-weight: bold;">Registro de Vuelos</div>
                
                <div class="card-body">
                    <form action="{{ route('procesarRegistroVuelo') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="origen">Origen</label>
                            <input type="text" class="form-control" name="txtorigen" value="{{ old('txtorigen') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtorigen') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="destino">Destino</label>
                            <input type="text" class="form-control" name="txtdestino" value="{{ old('txtdestino') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtdestino') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="fecha_salida">Fecha de Salida</label>
                            <input type="date" class="form-control" name="txtfecha_salida" value="{{ old('txtfecha_salida') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtfecha_salida') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="fecha_regreso">Fecha de Regreso</label>
                            <input type="date" class="form-control" name="txtfecha_regreso" value="{{ old('txtfecha_regreso') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtfecha_regreso') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="asientos_disponibles">Asientos Disponibles</label>
                            <input type="number" class="form-control" name="txtasientos" value="{{ old('txtasientos') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtasientos') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="clase">Clase</label>
                            <select class="form-control" name="txtclase">
                                <option value="economica" {{ old('txtclase') == 'economica' ? 'selected' : '' }}>Económica</option>
                                <option value="ejecutiva" {{ old('txtclase') == 'ejecutiva' ? 'selected' : '' }}>Ejecutiva</option>
                                <option value="primera" {{ old('txtclase') == 'primera' ? 'selected' : '' }}>Primera</option>
                            </select>
                            <small class="text-danger fst-italic">{{ $errors->first('txtclase') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="aerolinea">Aerolínea</label>
                            <input type="text" class="form-control" name="txtaerolinea" value="{{ old('txtaerolinea') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtaerolinea') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="numero_vuelo">Número de Vuelo</label>
                            <input type="text" class="form-control" name="txtvuelo" value="{{ old('txtvuelo') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtvuelo') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="horario_salida">Horario de Salida</label>
                            <input type="time" class="form-control" name="txthorario_salida" value="{{ old('txthorario_salida') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txthorario_salida') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="horario_llegada">Horario de Llegada</label>
                            <input type="time" class="form-control" name="txthorario_llegada" value="{{ old('txthorario_llegada') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txthorario_llegada') }}</small>
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
