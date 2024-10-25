<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    // Método para mostrar la lista de productos
    public function index(): View
    {
        $products = Product::paginate(10); // Cambia 10 por el número de elementos que desees mostrar por página
        return view('admin.products.index', compact('products'));
    }

    // Método para mostrar el formulario de creación
    public function create(): View
    {
        return view('admin.products.create');
    }

    // Método para almacenar el nuevo producto
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        // Crear un nuevo producto
        Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Método para mostrar el formulario de edición
    public function edit(Product $product): View
    {
        // Retornar la vista de edición con los datos del producto
        return view('admin.products.edit', compact('product'));
    }

    // Método para actualizar el producto
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
        ]);

        // Actualizar el producto
        $product->update($request->only('name', 'detail'));

        // Redirigir con mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Método para mostrar los detalles del producto
    public function show(Product $product): View
    {
        // Retornar la vista 'show' con el producto
        return view('admin.products.show', compact('product'));
    }

    // Método para eliminar el producto
    public function destroy(Product $product): RedirectResponse
    {
        // Eliminar el producto
        $product->delete();

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}