@extends('layouts.app')

@section('content')

<div id="app">
   <products-component></products-component> 
    <!-- <products-component" :products="{{$products}}">@{{$products}}</products-component> -->
<!-- <products-component" :products="@json($products)"></products-component> -->

</div>  
@endsection
