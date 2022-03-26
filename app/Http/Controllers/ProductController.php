<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts(){

        $products = Product::all();
        return view('admin/products/productindex',['products' => $products]);
        // return view('detail');
    }
}
