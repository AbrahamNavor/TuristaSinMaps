@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Vuelos')

@section('content')
    <div class="container mt-5 border p-3 rounded">
        <h1>Gestión de Vuelos</h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('registroVuelos.create') }}" class="btn btn-primary">Agregar Vuelo</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Origen</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Fecha Salida</th>
                        <th scope="col">Fecha Regreso</th>
                        <th scope="col">Asientos</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Aerolínea</th>
                        <th scope="col">Vuelo</th>
                        <th scope="col">Horario Salida</th>
                        <th scope="col">Horario Llegada</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($consulta as $registroVuelos)
                        <tr>
                            <td>{{ $registroVuelos->id }}</td>
                            <td>{{ $registroVuelos->origen }}</td>
                            <td>{{ $registroVuelos->destino }}</td>
                            <td>{{ $registroVuelos->fecha_salida }}</td>
                            <td>{{ $registroVuelos->fecha_regreso }}</td>
                            <td>{{ $registroVuelos->asientos }}</td>
                            <td>{{ $registroVuelos->clase }}</td>
                            <td>{{ $registroVuelos->aerolinea }}</td>
                            <td>{{ $registroVuelos->vuelo }}</td>
                            <td>{{ $registroVuelos->horario_salida }}</td>
                            <td>{{ $registroVuelos->horario_llegada }}</td>
                            <td>{{ $registroVuelos->precio }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#update{{$registroVuelos->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#destroy{{$registroVuelos->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Actualizar -->
                        <div class="modal fade" id="update{{$registroVuelos->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateLabel{{$registroVuelos->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Actualizar Vuelo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('registroVuelos.update', $registroVuelos->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            {{-- Campos para actualizar --}}
                                            <div class="mb-3">
                                                <label>Origen:</label>
                                                <input type="text" name="txtorigen" class="form-control" value="{{ $registroVuelos->origen }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Destino:</label>
                                                <input type="text" name="txtdestino" class="form-control" value="{{ $registroVuelos->destino }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Fecha Salida:</label>
                                                <input type="date" name="txtfecha_salida" class="form-control" value="{{ $registroVuelos->fecha_salida }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Fecha Regreso:</label>
                                                <input type="date" name="txtfecha_regreso" class="form-control" value="{{ $registroVuelos->fecha_regreso }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Asientos:</label>
                                                <input type="number" name="txtasientos" class="form-control" value="{{ $registroVuelos->asientos }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Clase:</label>
                                                <select name="txtclase" class="form-select" required>
                                                    <option value="economica" {{ $registroVuelos->clase == 'economica' ? 'selected' : '' }}>Económica</option>
                                                    <option value="ejecutiva" {{ $registroVuelos->clase == 'ejecutiva' ? 'selected' : '' }}>Ejecutiva</option>
                                                    <option value="primera" {{ $registroVuelos->clase == 'primera' ? 'selected' : '' }}>Primera</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>Aerolínea:</label>
                                                <input type="text" name="txtaerolinea" class="form-control" value="{{ $registroVuelos->aerolinea }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Número de Vuelo:</label>
                                                <input type="text" name="txtvuelo" class="form-control" value="{{ $registroVuelos->vuelo }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Horario Salida:</label>
                                                <input type="time" name="txthorario_salida" class="form-control" value="{{ $registroVuelos->horario_salida }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Horario Llegada:</label>
                                                <input type="time" name="txthorario_llegada" class="form-control" value="{{ $registroVuelos->horario_llegada }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>Precio:</label>
                                                <input type="number" name="txtprecio" class="form-control" value="{{ $registroVuelos->precio }}" required>
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
                        <div class="modal fade" id="destroy{{$registroVuelos->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="destroyLabel{{$registroVuelos->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Eliminar Vuelo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('registroVuelos.destroy', $registroVuelos->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body">
                                            <p class="text-danger">¿Estás seguro de que deseas eliminar este vuelo?</p>
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
                            <td colspan="13" class="text-center">No hay vuelos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
