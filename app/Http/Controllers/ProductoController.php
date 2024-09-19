<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('producto.create_producto');
    }

    // Guardar el nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string|max:100',
            'presentacion' => 'required|string|max:100',
            'pais_origen' => 'required|string|max:100',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
    }

    // Mostrar la tabla de productos
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index_producto', compact('productos'));
    }
}
