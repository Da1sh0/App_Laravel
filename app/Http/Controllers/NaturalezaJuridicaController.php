<?php

namespace App\Http\Controllers;

use App\Models\NaturalezaJuridica;
use Illuminate\Http\Request;

class NaturalezaJuridicaController extends Controller
{
    // Mostrar el formulario de crear
    public function create()
    {
        return view('naturalezaJuridica.create_naturaleza_juridica');
    }

    // Guardar la nueva naturaleza jurídica
    public function store(Request $request)
    {
        $request->validate([
            'id_naturaleza_juridica' => 'required|string|max:10',
            'nombre_naturaleza_juridica' => 'nullable|string|max:50',
        ]);

        NaturalezaJuridica::create($request->all());

        return redirect()->back()->with('success', 'Naturaleza Jurídica creada exitosamente');
    }

    // Mostrar la tabla de naturalezas jurídicas
    public function index()
    {
        $naturalezasJuridicas = NaturalezaJuridica::all();
        return view('naturalezaJuridica.index_naturaleza_juridica', compact('naturalezasJuridicas'));
    }
}
