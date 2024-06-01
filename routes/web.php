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

Route::get('/', function () {
    return view('index');
});

//PRODUCTOS

//lista
Route::get('productos', [ProductosController::class,'index']);

//create
Route::get('productos/new', [ProductosController::class,'create']);

//insert
Route::post('productos', [ProductosController::class, 'store']);

//edit
Route::get('productos/editar/{id}', [ProductosController::class, 'edit'])->name('productos.editar');

//update
Route::post('productos/{id}', [ProductosController::class, 'update'])->name('productos.actualizar');
