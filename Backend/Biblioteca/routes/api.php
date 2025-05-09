<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\SancionController;
use App\Http\Controllers\ReservaController;

//  Rutas para Roles - Funciona
Route::get('/roles', [RolController::class, 'index']);
Route::post('/roles', [RolController::class, 'store']);

//  Rutas para Usuarios - Funciona
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

//  Rutas para Estados - Funciona
Route::get('/estados', [EstadoController::class, 'index']);
Route::post('/estados', [EstadoController::class, 'store']);

//  Rutas para Categorías - Funciona
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);

//  Rutas para Libros - Funciona
Route::get('/libros', [LibroController::class, 'index']);
Route::post('/libros', [LibroController::class, 'store']);

//  Rutas para Ejemplares - Funciona
Route::get('/ejemplares', [EjemplarController::class, 'index']);
Route::post('/ejemplares', [EjemplarController::class, 'store']);

//  Rutas para Comentarios - Funciona
Route::get('/comentarios', [ComentarioController::class, 'index']);
Route::post('/comentarios', [ComentarioController::class, 'store']);

//  Rutas para Alquileres - Funciona
Route::get('/alquileres', [AlquilerController::class, 'index']);
Route::post('/alquileres', [AlquilerController::class, 'store']);

//  Rutas para Sanciones - Funciona
Route::get('/sanciones', [SancionController::class, 'index']);
Route::post('/sanciones', [SancionController::class, 'store']);

//  Rutas para Reservas - Funciona
Route::get('/reservas', [ReservaController::class, 'index']);
Route::post('/reservas', [ReservaController::class, 'store']);