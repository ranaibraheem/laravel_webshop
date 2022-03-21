@extends('layouts.app')

@section('content')

@include('layouts.menu_buttons')

<div id="app">
<cups-component ref="cupsComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></cups-component> 
</div>
@endsection