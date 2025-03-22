<?php

use App\Http\Controllers\PersonaController;

use App\Models\PooEjemplo;
use Illuminate\Support\Facades\Route;

Route::get('/poo', function () {
    $obj = new PooEjemplo("Ejemplo de POO en Laravel", 25); // Assuming 25 is the value for $edad
    return "Nombre: " . $obj->getNombre();
});

Route::get('/foreach', function () {
    $nombres = ['Juan', 'María', 'Pedro', 'Ana'];
    return view('examples.foreach', compact('nombres'));
});

Route::get('/personas', [PersonaController::class, 'index']);

// para definir la ruta personalizada

Route::get('/hola', function () {
    return view('welcome');
});

Route::get('/hola/{nombre}', function ($nombre) {
    return view('hola', ['nombre' => $nombre]);
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/contacto', function () {
    return view('contacto');
});