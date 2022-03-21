@extends('layouts.app')

@section('content')


@include('layouts.menu_buttons')

<div id="app">
<products-component ref="productsComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></products-component> 
</div>
@endsection