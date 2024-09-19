<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pagos Devengados</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Pagos Devengados</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Pago Devengado</th>
                    <th>Número de Documento Empleado</th>
                    <th>Tipo de Pago</th>
                    <th>Monto</th>
                    <th>Fecha de Pago</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagosDevengados as $pagoDevengado)
                    <tr>
                        <td>{{ $pagoDevengado->id_pago_devengado }}</td>
                        <td>{{ $pagoDevengado->nro_documento_empleado }}</td>
                        <td>{{ $pagoDevengado->tipo_pago }}</td>
                        <td>{{ number_format($pagoDevengado->monto, 2) }}</td>
                        <td>{{ $pagoDevengado->fecha_pago }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('pago_devengado.create') }}" class="btn btn-primary mt-3">Registrar Nuevo Pago Devengado</a>
    </div>
    
</body>
</html>
