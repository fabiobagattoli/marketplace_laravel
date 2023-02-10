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
    return view('welcome');
});

Route::get('/admin/stores', [\App\Http\Controllers\Admin\StoreController::class, 'index']);
Route::get('/admin/stores/create', [\App\Http\Controllers\Admin\StoreController::class, 'create']);
Route::post('/admin/stores/store', [\App\Http\Controllers\Admin\StoreController::class, 'store']);