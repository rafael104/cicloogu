<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/listarCardsTipoPropostas', 'App\Http\Controllers\PropostasController@listarCardsTipoProposta');
Route::post('/listarCardsTipoPropostas', 'App\Http\Controllers\PropostasController@listarCardsTipoProposta');
Route::get('/valores/{nomeTipo}', 'App\Http\Controllers\PropostasController@listarValores');
Route::get('/detalhes/{proposta}', 'App\Http\Controllers\PropostasController@listarDetalhesProposta');
