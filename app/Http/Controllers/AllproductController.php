<?php

namespace App\Http\Controllers;
use App\Models\Allproduct;
use Illuminate\Http\Request;

class AllproductController extends Controller
{
    public function index(){

        $allproducts =   Allproduct::all();
        return view('detail',['allproducts' => $allproducts]);
        // return view('detail');
    }
}
