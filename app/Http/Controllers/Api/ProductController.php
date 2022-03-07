<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }
        // $products = Product::all();
        // return view('products', compact('products'));
        // return ProductResource::collection(Product::all());
        // return Product::all();

}
