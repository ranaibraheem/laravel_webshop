<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;

class AdminController extends Controller
{


    public function index(){
        $users=   User::all();
        $product= Product::all();
        $category= ProductCategory::all();
        return view('admin/home',['users' => $users, 'product' => $product, 'category' => $category]);
    }

    public function showUsers(){
        $users= User::all();
        return view('admin/users/userindex',['users' => $users]);
    }

    // public function category(){
    //     return view('admin/category');
    // }

    // public function media(){
    //     return view('admin/media');
    // }

    // public function stock(){
    //     return view('admin/stock');
    // }


};
