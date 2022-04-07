<?php

use App\Http\Controllers\MiembroController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('miembros', MiembroController::class)->except('show')->names('admin.miembros');

Route::view('/Inicio', 'home');
Route::view('/Nosotros', 'nosotros');
Route::view('/Contactanos', 'contactanos');