@extends('layouts.nav')

@section('titulo', 'Gestión de Administradores')

@section('nav')
    <div class="container mt-5">
        <h1>Gestión de Administradores</h1>
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
                <td>Admin</td>
                <td>
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>  
                </td>
            </tr>
        </table>
    </div>
@endsection