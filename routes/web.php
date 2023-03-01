<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\iniciarSesion;
use App\Http\Controllers\casas;

Route::get('/', [iniciarSesion::class, 'iniciarSesion']) -> name('Iniciar Sesión');
Route::get('/casas', [casas::class, 'verCasas']) -> name('Casas');
