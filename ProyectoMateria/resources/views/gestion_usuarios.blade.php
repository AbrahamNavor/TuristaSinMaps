@extends('layouts.nav')

@section('titulo', 'Gestión de Usuarios')

@section('nav')
    <div class="container mt-5">
        <h1>Gestión de Usuarios</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        <tr>
            <td>1</td>
            <td>Juan Pérez</td>
            <td>juan.perez@example.com</td>
            <td>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>María López</td>
            <td>maria.lopez@example.com</td>
            <td>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Carlos García</td>
            <td>carlos.garcia@example.com</td>
            <td>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Ana Martínez</td>
            <td>ana.martinez@example.com</td>
            <td>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Pedro Fernández</td>
            <td>pedro.fernandez@example.com</td>
            <td>
                <button class="btn btn-primary">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        </table>
    </div>
@endsection
