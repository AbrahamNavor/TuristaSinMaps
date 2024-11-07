<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #ff7e5f;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .btn-custom:hover {
            background-color: white;
            color: black;
            border: 2px solid #ff7e5f;
        }

        .display-1-custom {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color: #ff7e5f;
            text-shadow: 2px 2px #feb47b;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-gradient" style="background: linear-gradient(to right, #ff7e5f, #feb47b);">

    <div class="container d-flex flex-column justify-content-center align-items-center text-center flex-grow-1">
        <h1 class="display-1-custom">Bienvenido a TuristaSinMaps</h1>
        <p class="text-white">Presiona el botón para iniciar...</p>

        <a href="{{ route('rutasesion') }}" class="btn btn-custom mb-2">Iniciar Sesion</a>

        <a href="{{ route('rutaregistro') }}" class="btn btn-custom">Registrarse</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<footer class="bg-dark text-white mt-auto py-3">
    <div class="container text-center">
        <p>&copy; 2023 TuristaSinMaps. Todos los derechos reservados.</p>
        <p>
            <a href="#" class="text-white">Política de Privacidad</a> |
            <a href="#" class="text-white">Términos de Servicio</a>
        </p>
    </div>
</footer>
