<div class='welcome_menu'>
               {{-- <select @change="filter()" v-model="filters" class="btn btn-primary">
                    <option selected value="all">All Products</option>
                    <option value="machines">Machines</option>
                    <option value="beans">Beans</option>
                    <option value="cups">cups</option>
                </select> --}}
  
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
       
            <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
            </button>
        

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ URL::to('/contact') }}" style="color:#cad2c5"> Contact us</a></li>
            <li><a class="dropdown-item" href="https://nl.wikipedia.org/wiki/Koffie_(drank)"
                    style="color:#cad2c5">About</a></li>
        </ul>
        </div>
        
        <div><a href="{{ url('/') }}" class="btn btn-primary">Home</a></div>
        </div>
