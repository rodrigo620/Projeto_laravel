<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\InicioController;
use App\Http\Controllers\DesenhoController;

Route::get('/', [InicioController::class, 'index']);
Route::get('/compartilhar', [InicioController::class, 'compartilhar']);
Route::get('/tecnica', [InicioController::class, 'create'])->middleware('auth');
Route::get('/tecnica/{id}', [InicioController::class, 'show']);
Route::post('/criar', [InicioController::class, 'store']);


Route::get('/desenho', [DesenhoController::class, 'create'])->middleware('auth');
Route::post('/criar_desenho', [DesenhoController::class, 'store']);

Route::post('/comentar', [CommentController::class, 'store']);

Route::get('/mais', [InicioController::class, 'mais']);

Route::get('/dashboard', [InicioController::class, 'dashboard'])->middleware('auth');

Route::delete('/tecnica/{id}', [InicioController::class, 'destroy']);
Route::delete('/desenho/{id}', [DesenhoController::class, 'deletar']);