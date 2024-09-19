<?php

namespace App\Http\Controllers;

use App\Models\TipoNovedad;
use Illuminate\Http\Request;

class TipoNovedadController extends Controller
{
    public function create()
    {
        return view('tipoNovedad.create_tipo_novedad');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tipo_novedad' => 'required|string|max:10',
            'nombre_tipo_novedad' => 'nullable|string|max:50',
            'descripcion_tipo' => 'nullable|string|max:200',
        ]);

        TipoNovedad::create($request->all());

        return redirect()->back()->with('success', 'Tipo de novedad creado exitosamente');
    }

    public function index()
    {
        $tipoNovedades = TipoNovedad::all();
        return view('tipoNovedad.index_tipo_novedad', compact('tipoNovedades'));
    }
}
