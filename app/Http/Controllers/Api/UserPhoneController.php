<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserPhone;
use Illuminate\Http\Request;
use App\Http\Resources\UserPhoneResource;

class UserPhoneController extends Controller
{
    public function index()
    {
        return UserPhoneResource::collection(UserPhone::all());
        // $products =  ProductResource::collection(Product::all());
        // return view('products', compact('products'));
    }
}
