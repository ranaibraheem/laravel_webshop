<?php

namespace App\Http\Controllers\Api;

use App\Models\UserOrder;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserOrderResource;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index()
    {
        return UserOrderResource::collection(UserOrder::all());
        // $products =  ProductResource::collection(Product::all());
        // return view('products', compact('products'));

    }
}
