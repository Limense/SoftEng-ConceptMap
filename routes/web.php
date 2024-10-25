<?php

use App\Http\Controllers\ModuloPrincipalController;
use App\Http\Controllers\ModuloUno\ModuloUnoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/inicio', [ModuloPrincipalController::class, 'index'])->name('inicio');

Route::get('inicio/modulo-1', [ModuloUnoController::class, 'index'])->name('inicio.modulo-1');
Route::get('inicio/modulo-1/tema-1', [App\Http\Controllers\ModuloUno\TemaUnoController::class, 'index'])->name('inicio.modulo-1.tema-1');