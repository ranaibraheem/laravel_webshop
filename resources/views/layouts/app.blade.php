<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header>
            <h2>
            <div v-html='brand'>@yield('brand')</div>
            </h2>
            <cart-component></cart-component>
            <div class="container-fluid navlinks">
                <!-- <select @change="filter()" v-model="filters" class="btn btn-primary">
                    <option selected value="all">All Products</option>
                    <option value="machines">Machines</option>
                    <option value="beans">Beans</option>
                    <option value="cups">cups</option>
                </select> -->

                <a href="/" class="btn btn-primary">Home</a>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item btn btn-primary">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" id="footer">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Cherkkoffie</p>
    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item">
            <a href="index.php" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li>
            <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        </li>
        <li>
            <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
        </li>
        <li>
            <a href="https://www.instagram.com/" class=" fa fa-instagram"></a>
        </li>
    </ul>
</footer>

</html>
