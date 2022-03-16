<!-- <select @change="filter()" v-model="filters" class="btn btn-primary"> -->
<div class="wimg" >
    <div class="sidenav">
    <div id="homeNav">
               <select @change="filter()" v-model="filters" class="btn btn-primary">
                    <option selected value="all">All Products</option>
                    <option value="machines">Machines</option>
                    <option value="beans">Beans</option>
                    <option value="cups">cups</option>
                </select>

         <div class="sideBtn"><a href="{{ url('frontend/products') }}" class="btn btn-primary">All Products</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/machines') }}" class="btn btn-primary">Coffee Machines</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/beans') }}" class="btn btn-primary">Coffee Beans</a></div>

        <div class="sideBtn"><a href="{{ url('frontend/cups') }}" class="btn btn-primary">Coffee Cups</a></div>

        
        
            <div class="sideBtn">
                <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
                </button>
            </div>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ URL::to('/contact') }}" style="color:#cad2c5"> Contact us</a></li>
                <li><a class="dropdown-item" href="{{ URL::to('/about') }}"
                        style="color:#cad2c5">About</a></li>
            </ul>

        <div class="sideBtn"><a href="{{ url('/') }}" class="btn btn-primary">Home</a></div>

        </div>

    </div>
            
                    <!-- <img id="homeImg" src="/images/coffeeGif1.gif" alt="animated coffee cup"> -->
                
                

    </div>
</div>

   

