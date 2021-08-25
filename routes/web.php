<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicosController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\CitasController;

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
    return view('welcome');
});

Route::get('home', function () {
    return "";
});

Route::resource('medicos', MedicosController::class)->only('index');
Route::resource('eps', EpsController::class)->only('index');
Route::resource('sedes', SedesController::class)->only('index');
Route::resource('citas', CitasController::class);
