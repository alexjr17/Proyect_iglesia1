<?php

use App\Http\Controllers\Admin\DiezmoController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Admin\GastoController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\MiembroController;
use App\Http\Controllers\Admin\OfrendaController;
use App\Http\Controllers\Admin\PropositoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('miembros', MiembroController::class)->except('show')->names('admin.miembros');

Route::resource('propositos', PropositoController::class)->except('show')->names('admin.propositos');

Route::resource('diezmos', DiezmoController::class)->except('show')->names('admin.diezmos');

Route::resource('ofrendas', OfrendaController::class)->except('show')->names('admin.ofrendas');

Route::resource('gastos', GastoController::class)->except('show')->names('admin.gastos');

Route::get('/eventos', [EventoController::class, 'index'])->name('admin.eventos.index');
Route::post('/eventos/agregar', [EventoController::class, 'store'])->name('admin.eventos.store');
Route::get('/eventos/mostrar', [EventoController::class, 'show'])->name('admin.eventos.show');

// Route::resource('eventos', EventoController::class)->names('admin.eventos');