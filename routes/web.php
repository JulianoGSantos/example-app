<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', [ClientController::class, 'start'])->name('start');
Route::get('/cliente', [ClientController::class, 'clientindex'])->name('client-index');
Route::post('/cliente/form', [ClientController::class, 'clientform'])->name('client-form');