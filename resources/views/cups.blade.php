@extends('layouts.master_head')
@section('content')

@include('layouts.menu_buttons')


<cups-component ref="cupsComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></cups-component> 

@endsection