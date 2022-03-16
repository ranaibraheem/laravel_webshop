<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductDiscount;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductDiscountResource;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function index()
    {
        return ProductDiscountResource::collection(ProductDiscount::all());
        // return  ProductDiscount::all();
    }
};
