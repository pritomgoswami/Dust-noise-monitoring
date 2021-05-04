<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/insert',[\App\Http\Controllers\ApiController::class,'create']);

 Route::get('dustChart',[\App\Http\Controllers\GraphController::class,'new'])->name('api.chart');

//Route::get('chart', 'Api\V1\Admin\ChartsApiController@index')->name('api.chart');
// Route::get('dustChart',[\App\Http\Controllers\GraphController::class,'new']);