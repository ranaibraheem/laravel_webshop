<?php

namespace App\Http\Controllers\Api;

use App\Models\Allproduct;
use App\Http\Controllers\Controller;
use App\Http\Resources\AllproductResource;
use Illuminate\Http\Request;

class AllproductController extends Controller
{
    public function index(){

        return AllproductResource::collection(Allproduct::all());
        // return  Allproduct::all();

    }
}
