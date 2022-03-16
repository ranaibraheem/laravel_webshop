<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductHasDiscount;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductHasDiscountResource;
use Illuminate\Http\Request;

class ProductHasDiscountController extends Controller
{
    public function index()
    {
        return ProductHasDiscountResource::collection(ProductHasDiscount::all());
        // return  ProductHasDiscount::all();
    }
};
