<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::latest()->paginate(5);
        return view('admin.marcas.index', compact('marcas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'marca' => 'required|string|max:255',
        ]);

        Marca::create($request->all());
        return redirect()->route('marcas.index')
            ->with('success', 'Marca creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca): View
    {
        return view('admin.marcas.show', compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $marca = Marca::findOrFail($id); // Cambié a findOrFail para mayor seguridad
        return view('admin.marcas.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'marca' => 'required|string|max:255',
        ]);

        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        return redirect()->route('marcas.index')
            ->with('success', 'Marca actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca): \Illuminate\Http\RedirectResponse
    {
        $marca->delete();

        return redirect()->route('marcas.index')
            ->with('success', 'Marca eliminada con éxito.');
    }
}
