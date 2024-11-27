<?php

use App\Http\Controllers\ModuloPrincipalController;
use App\Http\Controllers\ModuloUno\ModuloUnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
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

//Ruta para comprimir los archivos para descargar
Route::get('/download-folder/{folder}', [DownloadController::class, 'downloadFolder'])->name('download-folder');

// Ruta para cargar el módulo 1
Route::get('/modulo-1', function () {
    return view('modulo-1.index');
})->name('modulo1.index');

// Rutas para cargar los temas dentro del módulo 1
$temas = [
    'tema-01',
    'tema-02',
    'tema-03',
    'tema-04',
];

foreach ($temas as $index => $tema) {
    Route::get("/modulo-1/{$tema}", function () use ($tema) {
        return view("modulo-1.{$tema}.index");
    })->name("modulo1.tema" . ($index + 1)); 
}

// Ruta para cargar el módulo 2
Route::get('/modulo-2', function () {
    return view('modulo-2.index');
})->name('modulo2.index');

// Rutas para cargar los temas dentro del módulo 2
$temas = [
    'tema-05',
    'tema-06',
    'tema-07',
    'tema-08',
];

foreach ($temas as $index => $tema) {
    Route::get("/modulo-2/{$tema}", function () use ($tema) {
        return view("modulo-2.{$tema}.index");
    })->name("modulo2.tema" . ($index + 1)); 
}

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