<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
</head>

<body>
    <div id="app">
        @include('layouts.header_welcome')


        <div class="admin_menu">

            <div class="admin_btn"><a href="{{ route('all.users') }}" class="btn btn-primary">All Users</a></div>

            <div class="admin_btn"><a href="{{ route('all.product') }}" class="btn btn-primary">Products</a></div>

            <div class="admin_btn"><a href="{{ route('all.category') }}" class="btn btn-primary">All Categories</a></div>

            <div class="admin_btn"><a href="#" class="btn btn-primary">Add Multi Images</a></div>

            <!-- <div class="admin_btn"><a href="{{ url('/admin/media') }}" class="btn btn-primary">Media</a></div> -->

            <!-- <div class="admin_btn"><a href="{{ url('/admin/stock') }}" class="btn btn-primary">Stock</a></div> -->

            <div class="admin_btn"><a href="{{ route('all.users') }}" class="btn btn-primary">Back</a></div>

            <div class="admin_btn"><a href="{{ url('/') }}" class="btn btn-primary">Home</a></div>
        </div>

        <div class="admin_content">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>