<?php

use App\Http\Controllers\ConfiguracionVisitaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VisitaController;
use App\Http\Controllers\FichadaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ObservacionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/unauthenticated',function(){
    return response()->json('Unauthenticated',401);
})->name('unauthenticated');

Route::middleware(['token_env'])->group(function () {
    Route::get('fichadas',[FichadaController::class,'fichadas']);
    Route::get('asistencias',[FichadaController::class,'asistencias']);
    Route::get('personas',[FichadaController::class,'personas']);
    Route::get('sucursales',[FichadaController::class,'sucursales']);
    Route::get('grupos',[FichadaController::class,'grupos']);
    Route::get('secciones',[FichadaController::class,'secciones']);


});