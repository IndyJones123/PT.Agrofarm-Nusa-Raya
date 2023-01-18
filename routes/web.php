<?php

use App\Http\Controllers\HomeUsersController;
use App\Http\Controllers\Layout;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\TablePerusahaanController;
use App\Http\Controllers\Admin\TablePertanyaanController;
use App\Http\Controllers\Admin\TablePimpinanController;
use App\Http\Controllers\Admin\TableProductsController;
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
Route::get('/Products/{id}', [HomeUsersController::class, 'edit']);


Auth::routes();

Route::middleware(['auth'])->group(function () {
    //TablePerusahaan
    Route::get('/TablePerusahaan', [TablePerusahaanController::class, 'index']);
    Route::get('/TablePerusahaan/TablePerusahaan', [TablePerusahaanController::class, 'index']);
    Route::get('/TablePerusahaan/create', [TablePerusahaanController::class, 'create_perusahaan']);
    Route::post('/TablePerusahaan/create/store', [TablePerusahaanController::class, 'store']);
    Route::get('/TablePerusahaan/{id}/edit', [TablePerusahaanController::class, 'edit']);
    Route::put('/TablePerusahaan/{id}', [TablePerusahaanController::class, 'update']);
    Route::delete('/TablePerusahaan/{id}', [TablePerusahaanController::class, 'delete']);
    //TablePertanyaan
    Route::get('/TablePertanyaan', [TablePertanyaanController::class, 'index']);
    Route::get('/TablePertanyaan/create', [TablePertanyaanController::class, 'create_perusahaan']);
    Route::post('/TablePertanyaan/create/store', [TablePertanyaanController::class, 'store']);
    Route::get('/TablePertanyaan/{id}/edit', [TablePertanyaanController::class, 'edit']);
    Route::put('/TablePertanyaan/{id}', [TablePertanyaanController::class, 'update']);
    Route::delete('/TablePertanyaan/{id}', [TablePertanyaanController::class, 'delete']);
    //TablePimpinan
    Route::get('/TablePimpinan', [TablePimpinanController::class, 'index']);
    Route::get('/TablePimpinan/create', [TablePimpinanController::class, 'create_perusahaan']);
    Route::post('/TablePimpinan/create/store', [TablePimpinanController::class, 'store']);
    Route::get('/TablePimpinan/{id}/edit', [TablePimpinanController::class, 'edit']);
    Route::put('/TablePimpinan/{id}', [TablePimpinanController::class, 'update']);
    Route::delete('/TablePimpinan/{id}', [TablePimpinanController::class, 'delete']);
    //TableProducts
    Route::get('/TableProducts', [TableProductsController::class, 'index']);
    Route::get('/TableProducts/create', [TableProductsController::class, 'create_perusahaan']);
    Route::post('/TableProducts/create/store', [TableProductsController::class, 'store']);
    Route::get('/TableProducts/{id}/edit', [TableProductsController::class, 'edit']);
    Route::put('/TableProducts/{id}', [TableProductsController::class, 'update']);
    Route::delete('/TableProducts/{id}', [TableProductsController::class, 'delete']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
