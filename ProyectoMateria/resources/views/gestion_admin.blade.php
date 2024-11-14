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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Admin1</td>
                    <td>admin@example.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Admin2</td>
                    <td>admin2@example.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Admin3</td>
                    <td>admin3@example.com</td>
                </tr>
            </tbody>
        </table>
        <div class="container mt-5">
            <a href="{{ route('rutasesion') }}" class="btn btn-success">Regresar a Inicio Sesión</a>
        </div>
    </div>
@endsection
