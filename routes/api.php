<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
Route::get('/data/package', [ApiController::class,'index']);
Route::get('/data/menu', [ApiController::class,'menu']);
Route::get('/data/menus',[ApiController::class,'menus']);
Route::post('/data/menus',[ApiController::class,'chooseMenu']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
