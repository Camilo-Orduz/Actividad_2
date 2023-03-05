<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/crearProducto', [ProductosController::class, 'crear'])->name('crear_productos');
Route::post('productos', [ProductosController::class, 'store'])->name('guardar_productos');
Route::delete('productos/{id}', [ProductosController::class, 'destroy'])->name('eliminar_productos');

