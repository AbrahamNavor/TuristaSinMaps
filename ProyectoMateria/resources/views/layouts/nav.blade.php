<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite(['resources/js/app.js'])
    <title> @yield('titulo') </title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B8AA95;">
        <div class="container-fluid">
            <a href="{{ route('rutainicio') }}" class="navbar-brand">Turista sin Maps |</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active {{ request()->routeIs('rutahome') ? 'text-danger' : '' }}" aria-current="page" href="{{ route('rutahome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutavuelos') ? 'text-danger' : '' }}" href="{{ route('rutavuelos') }}">Busqueda Vuelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutahoteles') ? 'text-danger' : '' }}" href="{{ route('rutahoteles') }}">Busqueda Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('reservas.index') ? 'text-danger' : '' }}" href="{{ route('reservas.index') }}">Reservaciones</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-3">
                    @if (session()->has('usuario'))
                    <a href="{{ route('cerrarSesion') }}" class="navbar-brand">Cerrar Sesión</a>
                    @else
                    <a href="{{ route('rutasesion') }}" class="navbar-brand">Inicia Sesion</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('nav')
    </div>

    <footer class="mt-auto py-3 bg-light">
        <div class="container">
            @yield('footer')
        </div>
    </footer>
</body>

</html>
