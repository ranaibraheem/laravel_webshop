<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\AllproductController;
use App\Http\Controllers\DetailController;
use App\Models\Allproduct;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/webshop', function () {
//     return view('webshop');
// });


Auth::routes();

// Route::get('/products/all', [ProductController::class, 'index'])->name('all.product');

//ADMIN ROUTES
Route::get('/admin/', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('users');
Route::get('/admin/products', [ProductController::class, 'showProducts'])->name('products');
Route::get('/admin/category', [CategoryController::class, 'showCategories'])->name('categories');




//CATEGORY ROUTES
// Route::get('/', [CategoryController::class, 'index']);
Route::get('/category/all', [CategoryController::class, 'AllCategory'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCategory'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

// PRODUCTS ROUTE
 Route::get('/products/all', [ProductController::class, 'index'])->name('product');
 Route::post('/products/add', [ProductController::class, 'StoreProduct'])->name('store.product');
 Route::get('/products/edit/{id}', [ProductController::class, 'Edit']);
 Route::post('/products/update/{id}', [ProductController::class, 'Update']);
 Route::get('/products/delete/{id}', [ProductController::class, 'Delete']);

 Route::get('/admin/media', [AdminController::class, 'media']);
 Route::get('/admin/stock', [AdminController::class, 'stock']);



Route::get('/home', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('webshop');
});


Route::view('/products',['home']);
Route::view('/machines', ['machines']);
Route::view('/beans', ['beans']);
Route::view('/cups', ['cups']);
Route::get('/detail/{id}',[DetailController::class, 'index'])->name('product.detail');


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/users/index', function () {
    //  $users = DB::table('users')->get();
    $users = User::all();

    return view('admin.users.index', compact('users'));
})->name('all.users');


Route::view('/{any}', ['welcome']);
