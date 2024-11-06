<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])
    <title> @yield('titulo') </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #B8AA95;">
        <div class="container-fluid">
            <a href="{{ route('rutainicio') }}" class="navbar-brand">Turista sin Maps |</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('rutainicio') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutavuelos') }}">Busqueda Vuelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutahoteles') }}">Busqueda Hoteles</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                style="width: 400px;">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
        <div class="d-flex align-items-center ms-3">
            <a href="#" class="navbar-brand">Inicia Sesion</a>
            <img src="https://picsum.photos/700/400?random" alt="User Icon" class="rounded-circle" width="30"
                height="30">
        </div>
        </div>
        </div>
    </nav>

    @yield('nav')
</body>

</html>
