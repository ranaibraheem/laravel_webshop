<template>
    <div>
        <div id="checkout" class="container" v-if="!user">
            <div class="py-5 text-center">
                <h2>Checkout form</h2>
            </div>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span>Your cart</span>
                        <span class="badge bg-danger rounded-pill">{{totalQuantity}}</span>
                    </h4>
                    <ul class="list-group mb-3"  v-for="product in shoppingCart" :key="product.id">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <span>Product Name:</span>
                                <h6 class="mb-2">{{product.name}}</h6>
                                <span>Quantity:</span>
                                <small class="text-muted">{{product.quantity}}</small>
                            </div>
                            <div>
                                <h6 class="mb-2">Price:</h6>
                                <span v-if="product.onsale30">
                                    <span> 
                                        <b>$ {{((product.price - product.price*30/100)*product.quantity).toFixed(2)}}</b>
                                    </span>
                                    <div class="newPrice30">30%</div>
                                </span>
                                <span v-else-if="product.onsale50">
                                    <span> 
                                        <b>$ {{((product.price - product.price*50/100)*product.quantity).toFixed(2)}}</b>
                                    </span>
                                    <div class="newPrice50">50%</div>
                                </span>
                                <span v-else><b>$ {{(product.price*product.quantity).toFixed(2)}}</b></span><br>
                            </div>
                        </li>
                    </ul>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Total Discount</h6>
                        </div>
                        <span class="text-success">${{(totalPriceNoSale - totalPrice).toFixed(2)}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>Total (USD)</strong></span>
                        <strong>${{(totalPrice*1).toFixed(2)}}</strong>
                    </li>
                </div>

                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName1" placeholder="first name" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName1" placeholder="last name" required>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email1" placeholder="you@example.com">
                        </div>

                        <div>
                            <div class="col-sm-12">
                                <label for="address" class="form-label">Street</label>
                                <input type="text" class="form-control" id="street1" placeholder="street name" required>
                            </div>

                            <div class="col-sm-4">
                                <label for="house_number" class="form-label">House Number </label>
                                <input type="text" class="form-control" id="house_number1" placeholder="house number">
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip1" placeholder="zip code" required>
                            </div>
                        

                            <div class="col-md-4">
                                <label for="state" class="form-label">City</label>
                                <input type="text" class="form-control" id="city1" placeholder="Grongingen" required>
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country1" placeholder="The Netherlands"  required>
                            </div>
                            <div class="form-check">
                                <input id="choose" name="chooseAddress" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="choose">Check Address</label>
                            </div>
                        </div>
                        <hr class="my-4">
        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="my-4">
        
                        <h4 class="mb-3">Payment</h4>
        
                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>
            
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                            </div>
        
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            </div>
        
                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            </div>
        
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            </div>
                        </div>
            
                        <hr class="my-4">
            
                        <button class="w-100 btn btn-primary btn-lg" @click="remove()" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </div>

        <div v-else>
            <div id="checkout" class="container">
                <div class="py-5 text-center">
                    <h2>Checkout form</h2>
                    <h3>Welcome <b>{{user.first_name}} {{' '}} {{user.last_name}}</b></h3>
                </div>
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last" style="height:100hh; position:relative;">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span>Your cart</span>
                            <span class="badge bg-danger rounded-pill">{{totalQuantity}}</span>
                        </h4>
                        <ul class="list-group mb-3"  v-for="product in shoppingCart" :key="product.id">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <span>Product Name:</span>
                                    <h6 class="mb-2">{{product.name}}</h6>
                                    <span>Quantity:</span>
                                    <small class="text-muted">{{product.quantity}}</small>
                                </div>
                                <div>
                                    <h6 class="mb-2">Price:</h6>
                                    <span v-if="product.onsale30">
                                        <span> 
                                            <b>$ {{((product.price - product.price*30/100)*product.quantity).toFixed(2)}}</b>
                                        </span>
                                        <div class="newPrice30">30%</div>
                                    </span>
                                    <span v-else-if="product.onsale50">
                                        <span> 
                                            <b>$ {{((product.price - product.price*50/100)*product.quantity).toFixed(2)}}</b>
                                        </span>
                                        <div class="newPrice50">50%</div>
                                    </span>
                                    <span v-else><b>$ {{(product.price*product.quantity).toFixed(2)}}</b></span><br>
                                </div>
                            </li>
                        </ul>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Total Discount</h6>
                            </div>
                            <span class="text-success">${{(totalPriceNoSale - totalPrice).toFixed(2)}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Total Quantity</h6>
                            </div>
                            <span class="text-success">({{totalQuantity}})</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span><strong>Total (USD)</strong></span>
                            <strong>${{totalPrice.toFixed(2)}}</strong>
                        </li>

                        <span class="form-check checkout_form">
                            <form method="POST" action="/api/user_orders">
                                <!-- <div class="alert aler-success" v-show="success">Your Order is successfully submited</div> -->
                                <label for="total" class="form-label">Total Price</label>
                                <input id="total" class="form-control" type="float" name="total" v-model="orders.totalPrice" value="total"><br>
                                <label for="total_quantity" class="form-label">Total Quantity</label>
                                <input id="total_quantity" class="form-control" type="integer" name="total_quantity" v-model="orders.total_quantity" value="total_quantity"><br>
                                <label for="user_id" class="form-label">{{user.first_name}} id</label>
                                <input id="user_id" class="form-control" type="integer" name="user_id" v-model="orders.user_id" value="user_id"><br>
                                <!-- <span>Products:</span>
                                <span v-for="order_product in shoppingCart" :key="order_product.id">
                                    <ul>
                                        <li><label for="order_products" class="form-label">Product {{order_product.id}} {{'--'}} Quantity: {{order_product.quantity}} {{'--'}} Category: {{order_product.category}}</label>
                                        <input id="order_products" class="form-control" type="text" name="order_products" v-model="order_product.name" value="order_products"></li><br>
                                    </ul>
                                </span> -->
                                <button class="btn btn-primary" type="submit" @submit.prevent @click="remove()">checkout order</button>
                            </form>
                        </span>
                    </div>


                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Billing address</h4>
                        <form class="needs-validation" novalidate>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="first name" value=firstN required>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="last name" value=lastN required>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" value=useremail>
                            </div>

                            <div v-for="userinfo in user_addresses" :key="userinfo.id">
                                <div v-if="userinfo.user_id==user.id">
                                    <div class="col-sm-12">
                                        <label for="address" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="street" placeholder="street name" v-model="userinfo.street" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="house_number" class="form-label">House Number </label>
                                        <input type="text" class="form-control" id="house_number" v-model="userinfo.house_number" placeholder="house number">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="zip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="zip code" v-model="userinfo.zip_code" required>
                                    </div>
                                

                                    <div class="col-md-4">
                                        <label for="state" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="Grongingen" v-model="userinfo.city" required>
                                    </div>

                                    <div class="col-md-5">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="country" placeholder="The Netherlands" v-model="userinfo.country" required>
                                    </div>
                                    <div class="col-md-5" v-for="phone in user_phones" :key="phone.id">
                                        <span v-if="phone.user_id == user.id">
                                            <label for="phone1" class="form-label">Phone1</label>
                                            <input type="phone" class="form-control" id="phone1" placeholder="" v-model="phone.phone_number1" required>
                                            <label for="phone2" class="form-label">Phone1</label>
                                            <input type="phone" class="form-control" id="phone2" placeholder="" v-model="phone.phone_number2" required>
                                        </span>
                                    </div>

                                    <div class="form-check">
                                        <input id="choose" name="chooseAddress" type="radio" class="form-check-input" checked required>
                                        <label class="form-check-label" for="choose">Check Address</label>
                                    </div><hr>
                                </div>
                            </div>
            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="same-address">
                                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>
            
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save-info">
                                <label class="form-check-label" for="save-info">Save this information for next time</label>
                            </div>
                            <hr class="my-4">
            
                            <h4 class="mb-3">Payment</h4>
            
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Credit card</label>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="debit">Debit card</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="paypal">PayPal</label>
                                </div>
                            </div>
            
                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                </div>
            
                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                </div>
            
                                <div class="col-md-3">
                                    <label for="cc-expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                </div>
            
                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                </div>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {
       
        props:{
            shoppingCart: {
                type: Array,
            },
            totalQuantity: {
                type: Number,
                default: 0,
            },
            totalPrice: {
                type: parseFloat(Number),
                default: 0,
            },
            totalPriceNoSale:{
                type: parseFloat(Number),
                default: 0,
            },
            user:{
                type:[Object, Boolean],
            },
        },

        data() {
            return {
                products:[],
                users:[],
                user_orders:[],
                user_addresses:[],
                user_phones:[],
                useremail: '',
                loading: true,
                firstN:"",
                lastN:"",
                orders:{
                    totalPrice:(this.totalPrice*1).toFixed(2),
                    user_id: this.user.id,
                    total_quantity: this.totalQuantity,
                },
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.loadProductMedia();
            this.loadProduct();
            this.loadUser();
            this.loadUserOrder();
            this.loadUserAddress();
            this.loadUserPhone();

            if(this.user!=false){
            this.firstN=document.getElementById('firstName').value=this.user.first_name;
            this.lastN=document.getElementById('lastName').value=this.user.last_name;
            this.useremail=document.getElementById('email').value=this.user.email;
            };
        },

         created() {
        },

        methods: {
            loadProductMedia(){
                axios.get('/api/product_media')
                .then((response) =>{
                    this.product_media = response.data.data;
                    this.loading = false;

                })
                .catch(function(error){
                    console.log(error);
                });
            },

            loadProduct(){
                axios.get('/api/products')
                .then((response) =>{
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUser(){
                axios.get('/api/users')
                .then((response) =>{
                    this.users = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUserOrder(){
                axios.get('/api/user_orders')
                .then((response) =>{
                    this.user_orders = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUserAddress(){
                axios.get('/api/user_addresses')
                .then((response) =>{
                    this.user_addresses = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
            loadUserPhone(){
                axios.get('/api/user_phones')
                .then((response) =>{
                    this.user_phones = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });

            },
            // addOrder(e){
            //     // console.log(this.orders)
            //     axios.post('/api/user_orders', this.orders)
            //     .then((response) => {
            //         console.log(response)
            //         this.orders={};
            //         this.success = ture;
                        // e.preventDefault();
            //     })
            //     .catch(error => {
            //         console.log('Error: ' + error);
            //     });
            // },

            remove() {
                this.$root.$emit('remove')
            },
        },
    }
</script>
        