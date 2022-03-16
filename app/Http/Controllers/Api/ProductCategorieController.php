<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductCategorie;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProdcutCategorieResource;
use Illuminate\Http\Request;

class ProductCategorieController extends Controller
{
    public function index()
    {
        return ProdcutCategorieResource::collection(ProductCategorie::all());
        // return  ProductDiscount::all();
    }
}
