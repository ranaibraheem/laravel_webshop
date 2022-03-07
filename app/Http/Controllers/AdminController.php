<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Product;

class AdminController extends Controller
{


    public function index(){
        return view('admin/index');
    }

    public function products(){
        return view('admin/products');
    }

    public function category(){
        return view('admin/category');
    }

    public function media(){
        return view('admin/media');
    }

    public function stock(){
        return view('admin/stock');
    }


}
