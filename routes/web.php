<?php

use App\Http\Controllers\ModuloPrincipalController;
use App\Http\Controllers\ModuloUno\ModuloUnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

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

// Ruta para cargar login
Route::get('/login', function () {
    return view('login.index');
});

// Ruta para cargar register
Route::get('/register', function () {
    return view('register.index');
});

// Ruta para cargar ranking
Route::get('/ranking', function () {
    return view('ranking.index');
});

// Ruta para cargar profile
Route::get('/profile', function () {
    return view('profile.index');
});

// Ruta para cargar edit profile
Route::get('/profile/account', function () {
    return view('profile.account.index');
})->name('profile.account');

// Ruta para cargar el módulo 1
Route::get('/modulo-1', function () {
    return view('modulo-1.index');
})->name('modulo1.index');

// Ruta para cargar el tema 01 dentro del módulo 1
Route::get('/modulo-1/tema-01', function () {
    return view('modulo-1.tema-01.index');
})->name('modulo1.tema1');




// Rutas para el chatbot - Prefix para agrupar rutas, mantener el codigo legible
Route::prefix('chatbot')->group(function () {
    //Ruta para cargar la vista del chatbot (GET).
    Route::get('/', function () {
        return view('chatbot.index'); 
    })->name('chatbot.index');

    // Ruta para enviar preguntas al chatbot y recibir respuestas (POST).
    Route::post('/send', [ChatbotController::class, 'handle'])->name('chatbot.handle');
    // Ruta para limpiar el historial de mensajes en la interfaz del chatbot (POST).
    Route::post('/clear', [ChatbotController::class, 'clearHistory'])->name('chatbot.clear');
});