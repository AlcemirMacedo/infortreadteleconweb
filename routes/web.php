<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::post('/contato/enviar', [ContatoController::class, 'enviarContato'])->name('contato.enviar');
