<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public function index()
    {
        $puestos = Puesto::paginate(10);
        return view('admin.puestos.index', compact('puestos'));
    }

    public function create()
    {
        return view('admin.puestos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'puestos' => 'required|string|max:255', // Cambiado a 'puestos'
        ]);

        Puesto::create([
            'puesto' => $request->puestos, // Cambiado a $request->puestos
        ]);

        return redirect()->route('puestos.index')->with('success', 'Puesto creado con éxito.');
    }

    public function show(Puesto $puesto)
    {
        return view('admin.puestos.show', compact('puesto'));
    }

    public function edit(Puesto $puesto)
    {
        return view('admin.puestos.edit', compact('puesto'));
    }

    public function update(Request $request, Puesto $puesto)
    {
        $request->validate([
            'puestos' => 'required|string|max:255', // Cambiado a 'puestos'
        ]);

        $puesto->update($request->only('puestos')); // Cambiado a 'puestos'

        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado con éxito.');
    }

    public function destroy(Puesto $puesto)
    {
        $puesto->delete();

        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado con éxito.');
    }
}
