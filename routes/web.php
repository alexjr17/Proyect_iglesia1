<?php

use App\Http\Controllers\admin\MiembroController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::resource('miembros', MiembroController::class)->except('show')->names('admin.miembros');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/Inicio', 'home');
Route::view('/Nosotros', 'nosotros');
Route::view('/Contactanos', 'contactanos');