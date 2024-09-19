@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@section('table')
<div class="container">
    <h1>Crear Producto</h1>

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

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="presentacion">Presentación</label>
            <input type="text" name="presentacion" class="form-control" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="pais_origen">País de Origen</label>
            <input type="text" name="pais_origen" class="form-control" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear Producto</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Ver Todos</a>
    </form>
</div>
@endsection