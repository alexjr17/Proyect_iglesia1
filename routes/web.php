<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/Inicio', 'home');
Route::view('/Nosotros', 'nosotros');
Route::view('/Contactanos', 'contactanos');

Route::post('/contacto/envio', [ContactoController::class, 'enviarEmail']);