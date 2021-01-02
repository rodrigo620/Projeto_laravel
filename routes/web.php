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

Route::get('/', [InicioController::class, 'index']);
Route::get('/compartilhar', [InicioController::class, 'compartilhar']);
Route::get('/tecnica', [InicioController::class, 'create']);
Route::post('/criar', [InicioController::class, 'store']);

