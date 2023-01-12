<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Layout;
use App\Http\Controllers\SessionController;
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


Route::get('/', [Home::class, 'index']);

Route::get('/PTMultiNiagaAbadi', [Home::class, 'Branch1']);
Route::get('/PTTalentaTigaMuda', [Home::class, 'Branch2']);
Route::get('/PTAgriPrimeInternational', [Home::class, 'Branch3']);
Route::get('/PTAgrochem', [Home::class, 'Branch4']);
Route::get('/PTSAP', [Home::class, 'Branch5']);
Route::post('/sesi/login', [SessionController::class, 'login']);
