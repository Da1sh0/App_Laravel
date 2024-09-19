<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ruta_resultado_calculadora') }}" method="POST">
        @csrf
        <h1 class="label" >Calculadora en Laravel</h1>
        <label class="label" for="">Numero1: </label>
        <input class="datos" type="number" name="numero1">
        <br>
        <br>
        <label class="label" for="">Numero2: </label>
        <input class="datos" type="number" name="numero2">
        <br>
        <br>
        <select class="datos" name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">División</option>
        </select>
        <br>
        <br>
    <button  class="button2" type="submit">Calcular</button>
       
    </form>
        @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
        @endif
</body>
</html>