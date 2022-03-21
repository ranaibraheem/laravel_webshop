<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products =  product::all();
        return view('detail',['products' => $products]);
        // return view('detail');
    }
}
