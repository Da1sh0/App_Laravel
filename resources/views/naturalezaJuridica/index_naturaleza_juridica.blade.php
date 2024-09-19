<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Naturalezas Jurídicas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Naturalezas Jurídicas</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID Naturaleza Jurídica</th>
                    <th>Nombre Naturaleza Jurídica</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($naturalezasJuridicas as $naturalezaJuridica)
                    <tr>
                        <td>{{ $naturalezaJuridica->id_naturaleza_juridica }}</td>
                        <td>{{ $naturalezaJuridica->nombre_naturaleza_juridica }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ route('naturaleza_juridica.create') }}" class="btn btn-primary mt-3">Registrar Nueva Naturaleza Jurídica</a>
    </div>

</body>
</html>
