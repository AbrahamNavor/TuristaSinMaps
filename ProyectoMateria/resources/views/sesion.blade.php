@extends('layouts.nav')

@section('titulo', 'Inicia Sesion')

@section('nav')
    <div class="container mt-5">
        <h1>Inicia Sesion</h1>
        <form action="{{ route('rutainicio') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </form>
    </div>
@endsection