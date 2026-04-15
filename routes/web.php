<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EspecieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eventos', EventoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('especies', EspecieController::class)->parameters(['especies' => 'especie']);
Route::post('/eventos/{id_evento}/unir/{id_usuario}', [EventoController::class, 'unirParticipante'])->name('eventos.unir');
Route::post('/eventos/{id_evento}/desunir/{id_usuario}', [EventoController::class, 'desunirParticipante'])->name('eventos.desunir');