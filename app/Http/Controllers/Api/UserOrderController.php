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
        // $products =  ProductResource::collection(Product::all());
        // return view('products', compact('products'));

    }

    public function store(Request $request)
    {
        UserOrder::create($request->all());
        return response()->json(['message' => 'User Order Created Successfully.']);
    }


    // public function store(Request $request)
    // {
        // return UserOrder::create([
        //     'user_id' => $request['user_id'],
        //     'total' => $request['total'],
        // ]);


    //         $order = new UserOrder(['total' => $request->input('total'), 'user_id' => $request->input('user_id')]);
    //         $order->save();
    //         return response()->json('order created!');
    // }

    // public function show($id)
    // {
    //     $order = UserOrder::find($id);
    //     return response()->json($order);
    // }

    // public function update($id, Request $request)
    // {
    //     $order = UserOrder::find($id);
    //     $order->update($request->all());
    //     return response()->json('Order updated!');
    // }

    // public function destroy($id) {
    //     $order = UserOrder::find($id);
    //     $order->delete();
    //     return response()->json('Order deleted');
    // }
}
