@extends('layouts.master_head')

@section('content')
    

     <a class="btn btn-primary" href="/products">Go back!</a>

        @if(Auth::check())
       <checkout-component :shopping-cart="shoppingCart"  :total-quantity="totalQuantity" :total-price="totalPrice" :total-price-no-sale="totalPriceNoSale" :user="{{Auth::user()}}"></checkout-component> 
       @else
       <checkout-component :shopping-cart="shoppingCart"  :total-quantity="totalQuantity" :total-price="totalPrice" :total-price-no-sale="totalPriceNoSale" :user="false"></checkout-component>
        @endif
        @endsection

        
    @section('scripts')
          <script src="{{ asset('/checkout.js') }}"></script>
          @endsection
    
