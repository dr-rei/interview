<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerSoal1;
use App\Http\Controllers\VehicleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soal1', [ControllerSoal1::class, 'main']);
Route::get('/soal2', [VehicleController::class, 'main']);

