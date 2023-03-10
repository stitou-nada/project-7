<?php

use App\Http\Controllers\movieController;
use App\Http\Controllers\stagiaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('store',[movieController::class,'store']);
Route::get('ListAvoir',[movieController::class,'ListAvoir']);
Route::get('select/{type}',[movieController::class,'select']);
Route::get('ExisteMovie/{id}',[movieController::class,'ExisteMovie']);
