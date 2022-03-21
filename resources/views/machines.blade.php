@extends('layouts.app')

@section('content')

@include('layouts.menu_buttons')

<div id="app">
<machines-component ref="machinesComponent" :machine="machine" :bean="bean" :cup="cup" :machines="machines" :beans="beans" :cups="cups"></machines-component> 
</div>
@endsection