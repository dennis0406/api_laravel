<?php

use App\Http\Controllers\APIController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function (){
    return Product::all();
});
Route::get('/products/{product}', function (Product $product){
    return $product;
});
Route::controller(APIController::class)->group(function(){
    Route::get('/products', 'index');
    Route::get('/products/{product}', 'detail');
    Route::post('/products', 'create');
    Route::put('/products/{product}', 'update');
    Route::delete('/products/{product}', 'delete');
    Route::get('/search-by-name', 'searchByName');
    Route::get('/search-by-price', 'searchByPrice');
});
