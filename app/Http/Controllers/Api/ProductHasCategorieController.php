<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductHasCategorie;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductHasCategorieResource;

use Illuminate\Http\Request;

class ProductHasCategorieController extends Controller
{
    public function index()
    {
        return ProductHasCategorieResource::collection(ProductHasCategorie::all());
        // return  ProductHasCategorie::all();
    }
}
