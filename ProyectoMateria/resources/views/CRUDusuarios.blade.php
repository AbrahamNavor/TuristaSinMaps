@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Usuarios')

@section('content')

<div class="container mt-5 border p-3 rounded">
    <h1>Gestión de Usuarios</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('registro.create') }}" class="btn btn-primary">Agregar Usuario</a>
    </div>
    <div class="table-responsive mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consulta as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->nombre}}</td>
                    <td>{{$registro->apellido}}</td>
                    <td>{{$registro->email}}</td>
                    <td>{{$registro->telefono}}</td>
                    <td>{{$registro->contraseña}}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update{{$registro->id}}">
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#destroy{{$registro->id}}">
                            Eliminar
                        </button>
                    </td>
                </tr>

                <!-- Modal Actualizar -->
                <div class="modal fade" id="update{{$registro->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content fw-bold">
                            <div class="modal-header">
                                <h1 class="modal-title fs-4 fw-bold text-danger" id="staticBackdropLabel">Actualizar Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-primary">
                                <form method="POST" action="{{ route('registro.update', $registro->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="txtnombre" value="{{$registro->nombre}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Apellido:</label>
                                        <input type="text" class="form-control" name="txtapellido" value="{{$registro->apellido}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email:</label>
                                        <input type="email" class="form-control" name="txtemail" value="{{$registro->email}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtemail') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Teléfono:</label>
                                        <input type="text" class="form-control" name="txttelefono" value="{{$registro->telefono}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" name="txtpassword" value="{{$registro->contraseña}}">
                                        <small class="text-danger fst-italic">{{ $errors->first('txtpassword') }}</small>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Actualizar Usuario</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-square"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Eliminar -->
                <div class="modal fade" id="destroy{{$registro->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Eliminar Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('registro.destroy', $registro->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="text-danger fs-4 fw-semibold">
                                        ¿Seguro que deseas eliminar al usuario?
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Sí, Eliminar</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Salir</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach <!-- Cierre correcto del bucle -->
            </tbody>
        </table>
    </div>
</div>
@endsection
