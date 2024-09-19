<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tipo de Novedad</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Crear Tipo de Novedad</h1>

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

        <form action="{{ route('tipo_novedad.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_tipo_novedad">ID Tipo Novedad</label>
                <input type="text" name="id_tipo_novedad" class="form-control" maxlength="10" required>
            </div>

            <div class="form-group">
                <label for="nombre_tipo_novedad">Nombre Tipo Novedad</label>
                <input type="text" name="nombre_tipo_novedad" class="form-control" maxlength="50">
            </div>

            <div class="form-group">
                <label for="descripcion_tipo">Descripción Tipo</label>
                <textarea name="descripcion_tipo" class="form-control" maxlength="200"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Crear Tipo de Novedad</button>
            <a href="{{ route('tipo_novedad.index') }}" class="btn btn-secondary mt-3">Ver Todos</a>
        </form>
    </div>
</body>
</html>
