<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\iniciarSesion;
use App\Http\Controllers\casas;
use App\Http\Controllers\agregarCasa;

Route::get('/', [iniciarSesion::class, 'iniciarSesion']) -> name('Iniciar Sesión');
Route::get('/casas', [casas::class, 'verCasas']) -> name('Casas');
Route::get('/agregarCasa', [agregarCasa::class, 'agregandoCasa']) -> name('Agregando Casa');

