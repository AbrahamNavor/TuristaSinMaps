@extends('layouts.navAdmin')

@section('titulo', 'Gestión de Políticas de Hoteles')

@section('content')
    <div class="container mt-5">
        <h2>Editar Políticas</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Políticas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($consulta as $hotel)
                        <tr>
                            <td>{{ $hotel->id }}</td>
                            <td>{{ $hotel->nombre }}</td>
                            <td>{{ $hotel->politicas }}</td>
                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#update{{ $hotel->id }}">
                                    Editar
                                </button>
                            </td>
                        </tr>

                        <!-- Modal para editar políticas -->
                        <div class="modal fade" id="update{{ $hotel->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel{{ $hotel->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar Políticas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('editarPoliticas', $hotel->id) }}">
                                        @csrf
                                        @method('POST')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="politicas">Texto de Políticas</label>
                                                <input name="txtpoliticas" value="{{ $hotel->politicas }}" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay hoteles registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
