<div class='welcome_menu'>
               {{-- <select @change="filter()" v-model="filters" class="btn btn-primary">
                    <option selected value="all">All Products</option>
                    <option value="machines">Machines</option>
                    <option value="beans">Beans</option>
                    <option value="cups">cups</option>
                </select> --}}

        
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
        <div class="products block">
            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">Products Filter &#9662;
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/products" style="color:#cad2c5"> All Products</a></li>
                <li><a class="dropdown-item" href="/machines" style="color:#cad2c5"> Machines</a></li>
                <li><a class="dropdown-item" href="/beans" style="color:#cad2c5"> Beans</a></li>
                <li><a class="dropdown-item" href="/cups" style="color:#cad2c5"> Cups</a></li>
            </ul>
        </div>
        
        <div>
            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
            </button>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ URL::to('/contact') }}" style="color:#cad2c5"> Contact us</a></li>
            <li><a class="dropdown-item" href="{{ URL::to('/about') }}"
                    style="color:#cad2c5">About</a></li>
        </ul>

        <div><a href="{{ url('/') }}" class="btn btn-primary">Home</a></div>
        </div>
