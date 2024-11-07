@extends('layouts.nav')

@section('titulo', 'Gestión de Usuarios')

@section('content')

<div class="container mt-5">
    <h1>Gestión de Usuarios</h1>
    <div class="d-flex justify-content-end">
        <a href="#" class="btn btn-primary">Agregar Usuario</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
