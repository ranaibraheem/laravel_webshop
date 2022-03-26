@extends('admin.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome <b>{{ Auth::user()->first_name }} </b>,  you are logged in!
                   </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

             <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>

                        </tr>
                    </thead>
                    <tbody>
                            @php($i = 1)
                            @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $category->name }}</td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


            </div>
        </div>
    </div>
</div>     
@endsection