<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

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

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('stores')->group(function(){

        Route::get('/', [StoreController::class, 'index']);
        Route::post('/store', [StoreController::class, 'store'])->name('admin.stores.store');
        Route::get('/create', [StoreController::class, 'create']);
        Route::get('/edit/{store}', [StoreController::class, 'edit']);
        Route::post('/update/{store}', [StoreController::class, 'update'])->name('admin.stores.update');

    });

});

