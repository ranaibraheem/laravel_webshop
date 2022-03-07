<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ADMIN ROUTES
Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('/admin/products', [AdminController::class, 'products']);
Route::get('/admin/category', [AdminController::class, 'category']);
Route::get('/admin/media', [AdminController::class, 'media']);
Route::get('/admin/stock', [AdminController::class, 'stock']);


Route::get('/home', function(){
    return view('home');
});

// Route::get('/products', [ProductController::class, 'index'])->name('all.product');
// Route::get('/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('all.product');
// Route::view('/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('all.product');
Route::view('/products',['home']);
Route::view('/product_media', ['home']);