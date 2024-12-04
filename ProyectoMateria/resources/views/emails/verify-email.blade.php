<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmar registro</title>
</head>
<body>
    <h1>Hola, {{ $registro->nombre }}</h1>
    <p>Gracias por registrarte. Haz clic en el enlace de abajo para confirmar tu correo electrónico:</p>
    <a href="{{ route('verify.email', ['token' => $registro->verification_token]) }}">Confirmar correo</a>

</body>
</html>
