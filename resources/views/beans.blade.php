@extends('layouts.master_head')
@section('content')

@include('layouts.menu_buttons')


<beans-component ref="beansComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></beans-component> 

@endsection