<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\iniciarSesion;

Route::get('/', [iniciarSesion::class, 'iniciarSesion']) -> name('Iniciar Sesión');
