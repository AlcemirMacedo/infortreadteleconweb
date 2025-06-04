<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnotasController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::post('/contato/enviar', [ContatoController::class, 'enviarContato'])->name('contato.enviar');
Route:: get('/enotas', [EnotasController::class, 'enotas']);
