@extends('layouts.nav')

@section('titulo', 'Home')

@section('nav')

    @if (session('exito'))
        <script>
            Swal.fire({
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="container mt-5">
    </div>

    <div class="container mt-5">
        <h1>Bienvenido a Turista Sin Maps</h1>
        <p>Descubre los destinos más increíbles y los mejores consejos de viaje con Turista Sin Maps. ¡Tu aventura comienza
            aquí!</p>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="https://picsum.photos/350/200?random=1" alt="Imagen de destino turístico">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>Explora Nuevos Horizontes</h2>
                <p>Desde playas paradisíacas hasta montañas majestuosas, te ayudamos a encontrar los lugares más
                    impresionantes para tus próximas vacaciones.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column justify-content-center order-md-2">
                <h2>Consejos de Viaje</h2>
                <p>Obtén los mejores consejos de viaje, desde cómo empacar eficientemente hasta cómo encontrar las mejores
                    ofertas en vuelos y alojamiento.</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img class="img-fluid" src="https://picsum.photos/350/200?random=2" alt="Imagen de consejos de viaje">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="https://picsum.photos/350/200?random=3" alt="Imagen de reservaciones">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h2>Reservaciones Fáciles</h2>
                <p>Reserva tus hoteles y vuelos de manera rápida y sencilla con nuestra plataforma. Encuentra las mejores
                    ofertas y asegura tu lugar en los destinos más populares.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex flex-column justify-content-center order-md-2">
                <h2>Búsqueda Personalizada</h2>
                <p>Utiliza nuestras herramientas de búsqueda avanzada para encontrar el hotel perfecto y los vuelos más
                    convenientes para tu viaje. Personaliza tu búsqueda según tus preferencias y presupuesto.</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img class="img-fluid" src="https://picsum.photos/350/200?random=4"
                    alt="Imagen de búsqueda personalizada">
            </div>
        </div>
    </div>

@endsection
