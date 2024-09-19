<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tipos de Novedad</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Tipos de Novedad</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Tipo Novedad</th>
                    <th>Nombre Tipo Novedad</th>
                    <th>Descripción Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoNovedades as $tipoNovedad)
                    <tr>
                        <td>{{ $tipoNovedad->id_tipo_novedad }}</td>
                        <td>{{ $tipoNovedad->nombre_tipo_novedad }}</td>
                        <td>{{ $tipoNovedad->descripcion_tipo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('tipo_novedad.create') }}" class="btn btn-primary mt-3">Registrar Nuevo Tipo de Novedad</a>
    </div>

</body>
</html>
