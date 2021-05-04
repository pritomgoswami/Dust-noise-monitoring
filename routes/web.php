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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('create',[\App\Http\Controllers\MonitorController::class,'create']);
// Route::post('store',[\App\Http\Controllers\MonitorController::class,'store']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index',[\App\Http\Controllers\MonitorController::class,'index'])->name('index');

Route::get('sound',[\App\Http\Controllers\MonitorController::class,'sound']);
Route::get('temp',[\App\Http\Controllers\MonitorController::class,'temp']);
Route::get('hum',[\App\Http\Controllers\MonitorController::class,'hum']);
Route::get('combined',[\App\Http\Controllers\MonitorController::class,'main']);

// Route::post('chins',[\App\Http\Controllers\ApiController::class,'index']);
// Route::get('chart',[\App\Http\Controllers\ApiController::class,'show']);

Route::get('soundGraph',[\App\Http\Controllers\MonitorController::class,'soundGraph']);
 Route::get('dustGraph',[\App\Http\Controllers\MonitorController::class,'dustGraph']);
Route::get('tempGraph',[\App\Http\Controllers\MonitorController::class,'tempGraph']);
Route::get('humGraph',[\App\Http\Controllers\MonitorController::class,'humGraph']);


// Route::get('dustChart',[\App\Http\Controllers\GraphController::class,'new']);


// Route::get('demo',[\App\Http\Controllers\MonitorController::class,'tempGraph']);
