<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);
Route::resource('usuarios', UsuarioController::class);