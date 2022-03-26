<?php

namespace App\Http\Controllers\Api;

use App\Models\UserAddress;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserAddressResource;

use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function index()
    {
        return UserAddressResource::collection(UserAddress::all());
        // $products =  ProductResource::collection(Product::all());
        // return view('products', compact('products'));
    }
}
