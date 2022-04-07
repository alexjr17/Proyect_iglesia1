<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/admin/miembros', [MiembroController::class, 'index'])->name('admin.miembros.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/Inicio', 'home');
Route::view('/Nosotros', 'nosotros');
Route::view('/Contactanos', 'contactanos');