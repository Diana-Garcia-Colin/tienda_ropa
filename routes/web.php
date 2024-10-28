<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Tipo_ropaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Ruta principal de la aplicación después del inicio de sesión
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas de recursos para productos
Route::resource('products', ProductController::class);

// Rutas de recursos para marcas
Route::resource('/home/marcas', MarcasController::class);
Route::resource('/home/categorias', CategoriaController::class);
Route::resource('/home/tipo_ropas', Tipo_ropaController::class);
Route::resource('/home/empresas', EmpresaController::class);
Route::resource('/home/puestos', PuestoController::class);
Route::resource('/home/tallas', TallaController::class);
// Rutas administrativas bajo el prefijo 'admin'
Route::prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
});

// Rutas API para productos (si es necesario)
Route::apiResource('/home/products', ProductController::class);
