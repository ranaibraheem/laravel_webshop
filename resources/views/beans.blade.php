@extends('layouts.app')

@section('content')

@include('layouts.menu_buttons')

<div id="app">
<beans-component ref="beansComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></beans-component> 
</div>
@endsection