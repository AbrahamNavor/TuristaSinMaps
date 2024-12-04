@extends('layouts.nav')

@section('titulo', 'Registro de Usuario')

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
        <div class="col-12 col-md-10">
            <div class="card" style="background-color: rgba(0, 0, 0, 0.221);">
                
                <div class="card-header" style="font-size: 1.5rem; font-weight: bold;">Registro de Usuario</div>
                
                <div class="card-body">
                    <form action="{{ route('registro.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtemail') }}</small>

                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
                            <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="txtpassword" value="{{old('txtpassword')}}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtpassword') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="txtconfirmacion" value="{{old('txtconfirmacion')}}">
                            <small class="text-danger fst-italic">{{ $errors->first('txtconfirmacion') }}</small>
                        </div>
                        
                        <br>

                        <button type="submit" class="btn btn-success">Registrar</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
