<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
    </head>
    <body>
    <div class="container">
        <div class="header">
            <h1>Bienvenido a Paymaster</h1>
            <p>Tu solución integral para la gestión de pagos.</p>
        </div>
        <div class="buttons">
            <a href="{{ route('vista1') }}" class="btn btn-mission">Misión</a>
            <a href="{{ route('vista2') }}" class="btn btn-vision">Visión</a>
            <a href="{{ route('ruta_mostrar_calculadora') }}" class="btn btn-vision">Calculadora</a>
        </div>
        <div class="footer">
            <p>&copy; 2024 Paymaster. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>