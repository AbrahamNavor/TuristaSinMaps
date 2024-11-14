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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Navor</td>
                    <td>navor@example.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Michael Brown</td>
                    <td>michael@example.com</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Emily Davis</td>
                    <td>emily@example.com</td>
                </tr>
            </tbody>
        </table>
        <div class="container mt-5">
            <a href="{{ route('rutasesion') }}" class="btn btn-success">Regresar a Inicio Sesión</a>
        </div>
    </div>
@endsection
