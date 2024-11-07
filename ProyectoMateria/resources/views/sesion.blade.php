@extends('layouts.nav')

@section('titulo', 'Inicia Sesion')

@section('nav')
    <div class="container mt-5">
        @if(session('error'))
        <script>Swal.fire({
        title: "Contraseña o correo incorrecto",
        text: "{{ session('error') }}",
        icon: "error",
        // Other possible icons include:
        // icon: "error",
        // icon: "warning",
        // icon: "info",
        // icon: "question"
        });</script> 
    @endif
        <h1>Inicia Sesion</h1>
        <form action="{{ route('rutaprocesarSesion') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email">
                <small>{{ $errors->first('email') }}</small>

            </div>
            <div class="mb-3">
                <label for="constrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena">
                <small>{{ $errors->first('password') }}</small>

            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </div>
@endsection