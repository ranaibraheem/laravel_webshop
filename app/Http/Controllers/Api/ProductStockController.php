<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductStock;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductStockResource;
use Illuminate\Http\Request;

class ProductStockController extends Controller
{
    public function index(){

        return ProductStockResource::collection(ProductStock::all());
        // return  ProductStock::all();
    }
}
