@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Vuelos')

@section('content')

    <div class="container mt-5 border p-3 rounded">
        <h1>Gestión de Vuelos</h1>
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-primary">Agregar Vuelo</a>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>New York</td>
                    <td>Los Angeles</td>
                    <td>2023-10-01</td>
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
                    <td>Chicago</td>
                    <td>Miami</td>
                    <td>2023-10-02</td>
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
                    <td>San Francisco</td>
                    <td>Seattle</td>
                    <td>2023-10-03</td>
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