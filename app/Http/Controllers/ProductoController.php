<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tipo_ropa; // Importar modelo Tipo_ropa
use App\Models\Marca; // Importar modelo Marca
use App\Models\Categoria; // Importar modelo Categoria
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos con paginación
    public function index()
    {
        $productos = Producto::paginate(10); // Ajusta la paginación según sea necesario
        $productos=Producto::with('marca')->get();
        return view('admin.productos.index', compact('productos'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        $tipo_ropas = Tipo_ropa::all(); // Obtener todos los tipos de ropa
        $marcas = Marca::all(); // Obtener todas las marcas
        $categorias = Categoria::all(); // Obtener todas las categorías

        return view('admin.productos.create', compact('tipo_ropas', 'marcas', 'categorias'));
    }

    // Guardar un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'id_tipo_ropa' => 'required|exists:tipo_ropas,id',
            'precio' => 'required|numeric',
            'id_marca' => 'required|exists:marcas,id',
            'id_categoria' => 'required|exists:categorias,id',
            'imagen' => 'nullable|string',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    // Mostrar un producto específico
    public function show(Producto $producto)
    {
        return view('admin.productos.show', compact('producto'));
    }

    // Mostrar el formulario de edición
    public function edit(Producto $producto)
    {
        $tipo_ropas = Tipo_ropa::all(); // Cargar tipos de ropa para la vista de edición
        $marcas = Marca::all(); // Cargar marcas para la vista de edición
        $categorias = Categoria::all(); // Cargar categorías para la vista de edición
        return view('admin.productos.edit', compact('producto', 'tipo_ropas', 'marcas', 'categorias'));
    }

    // Actualizar un producto
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'id_tipo_ropa' => 'required|exists:tipo_ropas,id',
            'precio' => 'required|numeric',
            'id_marca' => 'required|exists:marcas,id',
            'id_categoria' => 'required|exists:categorias,id',
            'imagen' => 'nullable|string',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Eliminar un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
