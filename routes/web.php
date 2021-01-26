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
use App\Http\Controllers\CommentController;

Route::get('/', [InicioController::class, 'index']);
Route::get('/compartilhar', [InicioController::class, 'compartilhar']);
Route::get('/tecnica', [InicioController::class, 'create'])->middleware('auth');
Route::get('/tecnica/{id}', [InicioController::class, 'show']);
Route::post('/criar', [InicioController::class, 'store']);


Route::get('/desenho', [DesenhoController::class, 'create'])->middleware('auth');
Route::post('/criar_desenho', [DesenhoController::class, 'store']);

Route::post('/comentar', [CommentController::class, 'store']);
Route::get('/contatos', [CommentController::class, 'index']);

Route::get('/mais', [InicioController::class, 'mais']);

Route::get('/dashboard', [InicioController::class, 'dashboard'])->middleware('auth');

Route::delete('/tecnica/{id}', [InicioController::class, 'destroy'])->middleware('auth');;
Route::delete('/desenho/{id}', [DesenhoController::class, 'deletar'])->middleware('auth');;
Route::get('edit/{id}', [InicioController::class, 'edit'])->middleware('auth');
Route::put('update/{id}', [InicioController::class, 'update'])->middleware('auth');

Route::get('/desenho/edit/{id}', [DesenhoController::class, 'edit'])->middleware('auth');
Route::put('/desenho/update/{id}', [DesenhoController::class, 'update'])->middleware('auth');

Route::delete('/contatos/{id}', [CommentController::class, 'destroy'])->middleware('auth');;
Route::get('/contatos/edit/{id}', [CommentController::class, 'edit'])->middleware('auth');
Route::put('/contatos/update/{id}', [CommentController::class, 'update'])->middleware('auth');
