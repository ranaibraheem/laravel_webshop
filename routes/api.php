<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('products', 'Api\ProductController@index');
Route::get('/products', [App\Http\Controllers\Api\ProductController::class, 'index'], [App\Http\Controllers\Api\ProductMediaController::class, 'index'])->name('all.product','all.product.image');
Route::get('/product_media', [App\Http\Controllers\Api\ProductMediaController::class, 'index'])->name('all.product.image');
