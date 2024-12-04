@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Hoteles')

@section('content')

    <div class="container-fluid mt-5 border p-3 rounded">
        <h1>Gestión de Hoteles</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('registroHoteles.create') }}" class="btn btn-primary">Agregar Hotel</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Habitaciones Disponibles</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Servicios</th>
                        <th scope="col">Precio por Noche</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Politicas de Cancelación</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($consulta as $registroHoteles)
                        <tr>
                            <td>{{ $registroHoteles->id }}</td>
                            <td>{{ $registroHoteles->nombre }}</td>
                            <td>{{ $registroHoteles->direccion }}</td>
                            <td>{{ $registroHoteles->telefono }}</td>
                            <td>{{ $registroHoteles->habitaciones }}</td>
                            <td>{{ $registroHoteles->categoria }}</td>
                            <td>{{ $registroHoteles->servicios }}</td>
                            <td>{{ $registroHoteles->precio }}</td>
                            <td>{{ $registroHoteles->descripcion }}</td>
                            <td>{{ $registroHoteles->politicas }}</td>
                            <td>
                                <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#update{{$registroHoteles->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#destroy{{$registroHoteles->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    <!-- Modal Actualizar -->
                    <div class="modal fade" id="update{{$registroHoteles->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateLabel{{$registroHoteles->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Actualizar Hotel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('registroHoteles.update', $registroHoteles->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        {{-- Campos para actualizar --}}
                                        <div class="mb-3">
                                            <label>Nombre:</label>
                                            <input type="text" name="txtnombre" class="form-control" value="{{ $registroHoteles->nombre }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Ubicación:</label>
                                            <input type="text" name="txtdireccion" class="form-control" value="{{ $registroHoteles->direccion }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Telefono:</label>
                                            <input type="text" name="txttelefono" class="form-control" value="{{ $registroHoteles->telefono }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Habitaciones Disponibles:</label>
                                            <input type="number" name="txthabitaciones" class="form-control" value="{{ $registroHoteles->habitaciones }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="categoria">Categoría del Hotel</label>
                                            <select class="form-control" name="txtcategoria">
                                                <option value="1 estrella" {{ old('txtcategoria') == '1 estrella' ? 'selected' : '' }}>1 Estrella</option>
                                                <option value="2 estrellas" {{ old('txtcategoria') == '2 estrellas' ? 'selected' : '' }}>2 Estrellas</option>
                                                <option value="3 estrellas" {{ old('txtcategoria') == '3 estrellas' ? 'selected' : '' }}>3 Estrellas</option>
                                                <option value="4 estrellas" {{ old('txtcategoria') == '4 estrellas' ? 'selected' : '' }}>4 Estrellas</option>
                                                <option value="5 estrellas" {{ old('txtcategoria') == '5 estrellas' ? 'selected' : '' }}>5 Estrellas</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label>Servicios:</label>
                                            <input type="text" name="txtservicios" class="form-control" value="{{ $registroHoteles->servicios }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Precio por Noche:</label>
                                            <input type="number" name="txtprecio" class="form-control" value="{{ $registroHoteles->precio }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Descripción:</label>
                                            <textarea name="txtdescripcion" class="form-control" required>{{ $registroHoteles->descripcion }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label>Politicas de Cancelación:</label>
                                            <textarea name="txtpoliticas" class="form-control" required>{{ $registroHoteles->politicas }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning">Actualizar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Eliminar -->
                    <div class="modal fade" id="destroy{{$registroHoteles->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="destroyLabel{{$registroHoteles->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Eliminar Hotel</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('registroHoteles.destroy', $registroHoteles->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <p class="text-danger">¿Estás seguro de que deseas eliminar este hotel?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="11" class="text-center">No hay hoteles registrados.</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
