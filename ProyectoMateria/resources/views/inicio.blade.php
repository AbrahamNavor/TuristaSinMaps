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
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 5px;
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
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 3.5rem;
        }

        @media (max-width: 768px) {
            .display-1-custom {
                font-size: 2.5rem;
            }
        }

        .bg-custom {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://regeneracion.mx/wp-content/uploads/2015/11/google-maps-new-interface.jpg') no-repeat center center;
            background-size: cover;
        }

        .text-white-custom {
            color: #ffffff;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .text-white-custom {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-custom">

    <div class="container d-flex flex-column justify-content-center align-items-center text-center flex-grow-1">
        <h1 class="display-1-custom">Bienvenido a TuristaSinMaps</h1>
        <p class="text-white-custom">Presiona el botón para iniciar...</p>

        <a href="{{ route('rutasesion') }}" class="btn btn-custom mb-2 text-white">Iniciar Sesión</a>

        <a href="{{ route('registro.create') }}" class="btn btn-custom text-white">Registrarse</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    @if(session('exito'))
        <script>
            Swal.fire({
                title: "Respuesta del servidor",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <footer class="bg-dark text-white mt-auto py-3">
        <div class="container text-center">
            <p>&copy; 2023 TuristaSinMaps. Todos los derechos reservados.</p>
            <p>
                <a href="#" class="text-white">Política de Privacidad</a> |
                <a href="#" class="text-white">Términos de Servicio</a>
            </p>
        </div>
    </footer>
</body>

</html>
