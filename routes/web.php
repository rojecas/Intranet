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

// Sintaxis de  Laravel 10
Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes','index');
    Route::get('/clientes/create','create');
    Route::get('/clientes/{id}','show'); 
});
/* Sintaxis de  Laravel 9 
Route::get('/clientes', [ClienteController::class,'index']);
Route::get('/clientes/create', [ClienteController::class,'create']);
Route::get('/clientes/{id}', [ClienteController::class,'show']);
 */

 // Sintaxis de  Laravel 10
Route::controller(InstrumentoController::class)->group(function(){
    Route::get('/instrumentos','index');
    Route::get('/instrumentos/create','create');
    Route::get('/instrumentos/{id}','show');    
});

/* Sintaxis de  Laravel 9 
Route::get('/instrumentos', [InstrumentoController::class,'index']);
Route::get('/instrumentos/create', [InstrumentoController::class,'create']);
Route::get('/instrumentos/{id}', [InstrumentoController::class,'show']); */