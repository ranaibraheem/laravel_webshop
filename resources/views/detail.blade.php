@extends('layouts.app')
@section('content')
    <div class="products block">
        {{-- @foreach ($allproducts as $item)
            @if($item->id == $id)
                <img src="/images/webshop/{{($item->image)}}" class="col-5" height="800px">
                <div class="col-5" id="detail">
                    <h3><b>Name: </b>{{$item->name}}</h3>
                    <h3>{{$item->info}}</h3><hr>
                    <h3><b>Description: </b>{{$item->description}}</h3><hr>

                    @if($item->onsale30)
                        <h3><b>Sale 30%</b></h3>
                        <h3><b>Old Price: </b><span class="onSale">{{$item->price}}</span><br>
                            <b>New Price: </b><span class="newPrice30">{{$item->price*30/100}}</span>
                        </h3><hr>
                    @elseif($item->onsale50)
                        <h3><b>Sale 50%</b>
                        <h3><b>Old Price: </b><span class="onSale">{{$item->price}}</span><br>
                        <b>New Price: </b><span class="newPrice50">{{$item->price*50/100}}</span>
                        </h3><hr>
                    @else
                        <h3><b>Price: </b>{{$item->price}}</h3><hr>
                    @endif

                    @if($item->stock == 0)
                        <h3 class="soldOut"><b>Sold Out</b></h3><hr>
                    @elseif($item->stock <= 5 & $item->stock > 0)
                        <h3 class="soldOut"><b>Almost Sold Out</b></h3><hr>
                    @else
                        <h3><b>In Stock</b></h3><hr>
                    @endif

                    <h3>&#x1F6D2;
                       <button class="addToCart btn btn-primary" @click="updateCart($item)" id="app"><h3>Order</h3></span></button>
                    </h3>
                </div>
            @endif
        @endforeach --}}
    {{-- <h2>{{$id}}</h2>
    <h2>{{ route('product.detail', ['id'=>$id]) }}</h2>
    <h2>Here is the detail page</h2> --}}
    <detail-component ref="DetailComponent" :productindex="productindex"></detail-component>
    </div>

@endsection

