<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\dashController;
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

route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->resource('/empleado', empleadoController::class );
Route::middleware(['auth:sanctum', 'verified'])->resource('dash', dashController::class);
