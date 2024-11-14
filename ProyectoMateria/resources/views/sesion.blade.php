@extends('layouts.nav')

@section('titulo', 'Inicia Sesion')

@section('nav')
    <div class="container mt-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
        <h1>Inicia Sesion</h1>
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
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
        <div class="mt-3 d-flex justify-content-between">
            <a href="{{ route('rutag_admin') }}" class="btn btn" style="width: 45%;">Ver Admins</a>
            <a href="{{ route('rutag_usuarios') }}" class="btn btn" style="width: 45%;">Ver Usuarios</a>
        </div>
    <footer class="mt-5">
        <p class="text-center">&copy; 2023 TuristaSinMaps. Todos los derechos reservados.</p>
    </footer>
    </div>
@endsection