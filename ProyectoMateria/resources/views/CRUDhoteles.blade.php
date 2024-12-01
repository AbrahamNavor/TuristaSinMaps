@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Hoteles')

@section('content')

    <div class="container mt-5 border p-3 rounded">
        <h1>Gestión de Hoteles</h1>
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-primary">Agregar Hotel</a>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hotel California</td>
                    <td>Los Angeles</td>
                    <td>4.5</td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <form action="#" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Grand Hyatt</td>
                    <td>New York</td>
                    <td>4.7</td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <form action="#" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Hilton Garden Inn</td>
                    <td>Chicago</td>
                    <td>4.3</td>
                    <td>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <form action="#" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection