<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\AllproductController;
use App\Http\Controllers\DetailController;
use App\Models\Allproduct;
use App\Models\User;


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






Route::get('/products/all', [ProductController::class, 'index'])->name('all.product');

//ADMIN ROUTES
Route::get('/admin/index', [AdminController::class, 'index'])->name('home.admin');
Route::get('/admin/products', [AdminController::class, 'products']);

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
// Route::get('/products/all', [ProductController::class, 'AllProduct'])->name('all.product');
// Route::post('/products/add', [ProductController::class, 'StoreProduct'])->name('store.product');
// Route::get('/products/edit/{id}', [ProductController::class, 'Edit']);
// Route::post('/products/update/{id}', [ProductController::class, 'Update']);
// Route::get('/products/delete/{id}', [ProductController::class, 'Delete']);

// Route::get('/admin/media', [AdminController::class, 'media']);
// Route::get('/admin/stock', [AdminController::class, 'stock']);



Route::get('/home', function () {
    return view('home');
});


Route::view('/products',['home']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/users/index', function () {
    //  $users = DB::table('users')->get();
    $users = User::all();

    return view('admin.users.index', compact('users'));
})->name('all.users');

// Route::get('/detail/{id}', function ($id){
//     return view("detail", [
//         'id' => $id
//     ]);
// });
// Route::get('/allproducts', [AllproductController::class, 'index'])->name('all.products');
Route::get('/detail/{id}',[DetailController::class, 'index'])->name('product.detail');