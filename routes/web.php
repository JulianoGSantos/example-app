<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('/cliente/busca', [ClientController::class, 'clientsearch'])->name('client-search');
Route::get('/cliente/{id}', [ClientController::class, 'clientshow'])->name('client-show');
Route::post('/cliente/form', [ClientController::class, 'clientform'])->name('client-form');
Route::get('/cliente', [ClientController::class, 'clientindex'])->name('client-index');

Route::get('/busca', [ClientController::class, 'search'])->name('search');
Route::get('/inicio', [ClientController::class, 'start'])->name('start');

Route::get('/bootstrap', [ClientController::class, 'teste'])->name('teste');