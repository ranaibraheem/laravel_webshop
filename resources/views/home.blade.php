<!-- user is redirected to the products when logged in -->
@extends('layouts.app')

@section('content')


@include('layouts.menu_buttons')


<products-component ref="productsComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></products-component> 

@endsection