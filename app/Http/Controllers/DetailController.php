<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $products =   Detail::all();
        return view('detail',
        [
            'products' => $products
        ],
        [
            'id' => $id
        ]);
    }
}
