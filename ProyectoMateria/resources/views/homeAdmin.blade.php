@extends('layouts.navAdmin')

@section('titulo', 'Opciones de Administrador')

@section('navAdmin')
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            @if (session('exito'))
                <div class="alert alert-success w-100 text-center">
                    {{ session('exito') }}
                </div>
            @endif
            @if (session('exito'))
                <script>
                    Swal.fire({
                        title: "Respuesta del servidor",
                        text: "{{ session('exito') }}",
                        icon: "success"
                    });
                </script>
            @endif
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <a href="{{ route('rutaCRUDvuelos') }}" class="btn btn-success btn-lg w-100 mb-2">
                            <i class="fas fa-plane"></i> CRUD Vuelos
                        </a>
                        <p class="mt-2 flex-grow-1">Encuentra los mejores vuelos a tu destino.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <a href="{{ route('rutaCRUDhoteles') }}" class="btn btn-success btn-lg w-100 mb-2">
                            <i class="fas fa-hotel"></i> CRUD Hoteles
                        </a>
                        <p class="mt-2 flex-grow-1">Reserva los mejores hoteles al mejor precio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <a href="#" class="btn btn-success btn-lg w-100 mb-2">
                            <i class="fas fa-file-contract"></i> Politicas de Cancelación y condiciones
                        </a>
                        <p class="mt-2 flex-grow-1">Revisa y administra las políticas de cancelación y condiciones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('rutagestion_usuario') }}" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-users"></i> Gestionar Usuarios
                        </a>
                        <p class="mt-2">Administra los usuarios de la plataforma.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-chart-line"></i> Ver Reportes
                        </a>
                        <p class="mt-2">Consulta los reportes y estadísticas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
