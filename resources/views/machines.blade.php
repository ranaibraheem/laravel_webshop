@extends('layouts.master_head')
@section('content')





@include('layouts.menu_buttons')


<machines-component ref="machinesComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></machines-component> 

@endsection