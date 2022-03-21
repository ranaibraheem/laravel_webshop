<nav class="header_welcome_nav navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2 class="cherk_title"  >&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>

                        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }}
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
            </ul>
        </div>
            <cart-component ref="shoppingComponent" :shopping-cart="shoppingCart"  :total-quantity="totalQuantity" :total-price="totalPrice"></cart-component>
        </nav>
        

        
                <!-- <select class="btn btn-primary">
                    <option selected value="all">More Information</option>
                    <option  value="all"></option>
                    <option value="machines">About</option>
                    <option value="beans">contact</option>
                </select> -->
         <!-- <div class="sideBtn"><a href="{{ url('frontend/products') }}" class="btn btn-primary">All Products</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/machines') }}" class="btn btn-primary">Coffee Machines</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/beans') }}" class="btn btn-primary">Coffee Beans</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/cups') }}" class="btn btn-primary">Coffee Cups</a></div> -->

        {{-- <a href="/products" class="fixlink btn btn-primary">Products</a>


        
            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
            </button>
        

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ URL::to('/contact') }}" style="color:#cad2c5"> Contact us</a></li>
            <li><a class="dropdown-item" href="{{ URL::to('/about') }}"
                    style="color:#cad2c5">About</a></li>
        </ul>

        <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
 --}}
        
