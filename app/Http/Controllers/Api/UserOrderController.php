<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\UserOrder;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserOrderResource;
use Illuminate\Http\Response;

class UserOrderController extends Controller
{
     /**  
     * success response method.  
     *  
     * @return \Illuminate\Http\Response 
     * @return \Illuminate\Http\Request 
     */  
    public function index()
    {
        return UserOrderResource::collection(UserOrder::all());
    }

    public function store(Request $request)
    {
        UserOrder::create($request->all());
        return response()->json(['message' => 'User Order Created Successfully.']);
        // return response()->json($request, 200);
    }
}
