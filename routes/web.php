<?php

use App\Http\Controllers\HomeUsersController;
use App\Http\Controllers\Layout;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\TablePerusahaanController;
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


Route::get('/', [HomeUsersController::class, 'index']);

Route::get('/PTMultiNiagaAbadi', [HomeUsersController::class, 'Branch1']);
Route::get('/PTTalentaTigaMuda', [HomeUsersController::class, 'Branch2']);
Route::get('/PTAgriPrimeInternational', [HomeUsersController::class, 'Branch3']);
Route::get('/PTAgrochem', [HomeUsersController::class, 'Branch4']);
Route::get('/PTSAP', [HomeUsersController::class, 'Branch5']);
Route::get('/TablePerusahaan', [TablePerusahaanController::class, 'index']);
Route::get('/TablePerusahaan/create', [TablePerusahaanController::class, 'create_perusahaan']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
