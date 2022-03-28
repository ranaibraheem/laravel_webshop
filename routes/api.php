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
// Route::middleware('auth:api')->get('/user',function(Request $request){
//     return $request->user();
// });

//get
Route::get('/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('products.all');
Route::get('/product_media', [App\Http\Controllers\Api\ProductMediaController::class, 'index'])->name('product.images');
Route::get('/product_stocks', [App\Http\Controllers\Api\ProductStockController::class, 'index'])->name('products.stock');
Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index'])->name('users.all');
Route::get('/user_orders', [App\Http\Controllers\Api\UserOrderController::class, 'index'])->name('users.orders');
Route::get('/user_addresses', [App\Http\Controllers\Api\UserAddressController::class, 'index'])->name('users.addresses');


//post
Route::post('/user_orders',[App\Http\Controllers\Api\UserOrderController::class, 'store'])->name('order.store');
