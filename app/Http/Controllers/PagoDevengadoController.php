<?php

namespace App\Http\Controllers;

use App\Models\PagoDevengado;
use Illuminate\Http\Request;

class PagoDevengadoController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('pagoDevengado.create_pago_devengado');
    }

    // Guardar el nuevo pago devengado
    public function store(Request $request)
    {
        $request->validate([
            'id_pago_devengado' => 'required|string|max:10',
            'nro_documento_empleado' => 'nullable|string|max:10',
            'tipo_pago' => 'nullable|string|max:50',
            'monto' => 'nullable|numeric',
            'fecha_pago' => 'nullable|date',
        ]);

        PagoDevengado::create($request->all());

        return redirect()->back()->with('success', 'Pago devengado creado exitosamente');
    }

    // Mostrar la tabla de pagos devengados
    public function index()
    {
        $pagosDevengados = PagoDevengado::all();
        return view('pagoDevengado.index_pago_devengado', compact('pagosDevengados'));
    }
}
