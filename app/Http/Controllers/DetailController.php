<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $allproducts =   Detail::all();
        return view('detail',
        [
            'allproducts' => $allproducts
        ],
        [
            'id' => $id
        ]);
    }
}
