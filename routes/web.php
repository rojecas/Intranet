<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/', HomeController::class);
Route::get('/clientes', [ClienteController::class,'index']);
Route::get('/clientes/create', [ClienteController::class,'create']);
Route::get('/clientes/{id}', [ClienteController::class,'show']);
Route::get('/instrumentos', [InstrumentoController::class,'index']);
Route::get('/instrumentos/create', [InstrumentoController::class,'create']);
Route::get('/instrumentos/{id}', [InstrumentoController::class,'show']);