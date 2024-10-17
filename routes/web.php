<?php

use App\Http\Controllers\AdicionalesPersonaContratoActiveController;
use App\Http\Controllers\CargosActiveController;
use App\Http\Controllers\PlanillaConsultoresController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\UsuarioController;
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


Route::get('test',function(){
    return env('TOKEN_API','');
});