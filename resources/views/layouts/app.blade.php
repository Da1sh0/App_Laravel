<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Menu de mi app')</title>
</head>
<body>
    <header>
        <h3>Supermercado</h3>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ route('productos.create') }}">Crear</a></li>
                <li><a href="{{ route('productos.index') }}">Listar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
        @yield('table')
    </main>
    <p>&copy; 2024 Supermercado</p>
    <footer>
    </footer>
</body>
</html>