<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Naturaleza Jurídica</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Naturaleza Jurídica</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('naturaleza_juridica.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_naturaleza_juridica">ID Naturaleza Jurídica</label>
                <input type="text" name="id_naturaleza_juridica" class="form-control" maxlength="10" required>
            </div>

            <div class="form-group">
                <label for="nombre_naturaleza_juridica">Nombre Naturaleza Jurídica</label>
                <input type="text" name="nombre_naturaleza_juridica" class="form-control" maxlength="50">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Naturaleza Jurídica</button>
            <a href="{{ route('naturaleza_juridica.index') }}" class="btn btn-secondary mt-3">Ver Todos</a>
        </form>
    </div>
</body>
</html>
