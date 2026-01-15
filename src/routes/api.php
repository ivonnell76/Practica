<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonenteController;
use App\Http\Controllers\AsistenteController;


Route::get('/eventos', [EventoController::class, 'index']);
Route::post('/eventos', [EventoController::class, 'store']);
Route::get('/eventos/{id}', [EventoController::class, 'show']);
Route::put('/eventos/{id}', [EventoController::class, 'update']);
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);



/**
* Rutas públicas
*/
// Recuperar todos los eventos
Route::get('/eventos', [EventoController::class, 'index']);
// Recuperar un evento específico
Route::get('/eventos/{id}', [EventoController::class, 'show']);
// Recuperar todos los ponentes
Route::get('/ponentes', [PonenteController::class, 'index']);
// Recuperar un ponente específico
Route::get('/ponentes/{id}', [PonenteController::class, 'show']);


/**
* Rutas privadas
*/
Route::middleware('auth:api')->group(function () {
// Almacenar un evento nuevo
Route::post('/eventos', [EventoController::class, 'store']);
// Actualizar un evento específico
Route::put('/eventos/{evento}', [EventoController::class, 'update']);
// Eliminar un evento específico
Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);
// Almacenar un ponente nuevo
Route::post('/ponentes', [PonenteController::class, 'store']);
// Actualizar un ponente específico
Route::put('/ponentes/{ponente}', [PonenteController::class, 'update']);
// Eliminar un ponente específico
Route::delete('/ponentes/{id}', [PonenteController::class, 'destroy']);

