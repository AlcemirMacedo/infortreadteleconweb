<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::post('/contato/enviar', [ContatoController::class, 'enviarContato'])->name('contato.enviar');
Route:: get('/stfolha', [MainController::class, 'stfolha']);
Route:: get('/cconline', [MainController::class, 'cconline']);
Route:: get('/sam', [MainController::class, 'sam']);
Route:: get('/ienotas', [MainController::class, 'sam']);
Route:: get('ilicitacao', [MainController::class, 'ilicitacao']);
Route:: get('/ice', [MainController::class, 'ice']);
Route:: get('/ipatrimonial', [MainController::class, 'ipatrimonial']);
Route:: get('/iprotocolo', [MainController::class, 'iprotocolo']);
Route:: get('/consultoria', [MainController::class, 'consultoria']);
