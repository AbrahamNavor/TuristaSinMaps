@extends('layouts.nav')

@section('titulo', 'Inicia Sesion')

@section('nav')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="w-100">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            @if(session('exito'))
                <script>
                    Swal.fire({
                        title: "Respuesta del servidor",
                        text: "{{ session('exito') }}",
                        icon: "success"
                    });
                </script>
            @endif

            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card" style="background-color: rgba(0, 0, 0, 0.221); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.221);">
                        <div class="card-body">
                            <h1 class="card-title">Inicia Sesion</h1>
                            <form action="{{ route('procesarSesion') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    @if ($errors->has('email'))
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                                    @if ($errors->has('contrasena'))
                                        <small class="text-danger">{{ $errors->first('contrasena') }}</small>
                                    @endif
                                </div>            
                                <button type="submit" class="btn btn-primary w-100">Iniciar Sesion</button>
                            </form>
                            <div class="mt-3 text-center">
                                <a href="#">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection