<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EspecieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('especies', EspecieController::class);