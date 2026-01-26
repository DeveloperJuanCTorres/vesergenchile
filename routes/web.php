<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/tienda', [StoreController::class, 'index'])->name('store.index');
Route::get('/tienda/{slug}', [StoreController::class, 'show'])
    ->name('store.show');
Route::get('/contacto', [HomeController::class, 'contact']);
Route::get('/programacion', [HomeController::class, 'programacion']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
