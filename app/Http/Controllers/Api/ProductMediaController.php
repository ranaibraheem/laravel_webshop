<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductMedia;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductMediaResource;
use Illuminate\Http\Request;

class ProductMediaController extends Controller
{
    public function index()
    {
        return ProductMediaResource::collection(ProductMedia::all());
    }
}
