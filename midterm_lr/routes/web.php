<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'show')->name('show');
    Route::get('/create', 'index');
    Route::post('/create', 'addRoom')->name('add');
    Route::get('/detail/{id}', 'showDetail')->name('detail');
});

Route::get('/client', function () {
    return Http::get('https://itviec.com/it-jobs/');
});
