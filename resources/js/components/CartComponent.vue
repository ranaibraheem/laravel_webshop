<template>
<span>
    <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <span>&#x1F6D2;</span>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <div id=cartButton>
                <div class="cart">
                    <span class="total-quantity">{{totalQuantity}}</span>
                </div>
            </div>
        </span>
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div id="cartBorder" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Shopping Cart:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <hr>
                <div class="modal-body">
                    <h6>Cart Items:</h6>
                    <div id="border">
                    <ul id="shoppingCart">
                        <li v-for="(product, index) in shoppingCart" :key="product.id" >
                            <span id="shopping">Name:</span> {{product.name}}<br> 
                            <span id="shopping">Quantity:</span>({{product.quantity}})<br>
                            <span id="shopping">Price:</span>
                            <span v-if="product.onsale30">
                                <span class="newPrice30"> <b>$ {{(product.price - product.price*30/100)*product.quantity}}</b>
                                    <span id="saleBorder">Sale 30%</span>
                                </span>
                            </span>
                            <span v-else-if="product.onsale50">
                                <span class="newPrice50"> <b>$ {{(product.price - product.price*50/100)*product.quantity}}</b>
                                    <span id="saleBorder"> Sale 50%</span>
                                </span>
                            </span>
                            <span v-else><b>$ {{product.price*product.quantity}}</b></span><br>
                            <div class="col-md-12">
                                <img :src="'/images/webshop/' + product.image" width="40%">
                                <span>&#x1F6D2;</span>
                                
                                <button class="addToCart btn btn-primary" @click="updateProduct(product,index,'substract')"
                                    :disabled="product.stock === 0 && product.quantity===0"
                                    :class="{disabledButton: product.stock===0 && product.quantity===0}">-
                                </button>
                                <span>{{product.quantity}}</span>
                                <button class=" addToCart btn btn-primary" @click="updateProduct(product, index, 'add')"
                                    :disabled="product.stock === 0" :class="{disabledButton: product.stock === 0}">+
                                </button>
                                <span>
                                <i class="fa fa-trash-o" id="deletBtn" @click="removeProduct(index)"></i>
                                </span>

                            </div>
                            <hr>
                        </li>
                    </ul>
                    <h5 class="modal-title" id="staticBackdropLabel">Total:</h5>
                    <ul id="shoppingCart">
                        <li> <span id="shopping">Total Price:</span>
                            <span><b>$ {{totalPrice}}</b></span>
                        </li>
                        <li><span id="shopping">Remove All:</span>
                            <i class="fa fa-trash-o" id="deletBtn" @click="remove()" ></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Check Out</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</span>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            // this.loadProduct();
            // this.loadProductMedia();
            // this.loadProductDiscount();
            // this.loadProductHasDiscount();
            // this.loadProductCategorie();
            // this.loadProductHasCategorie();
            // this.loadProductStock();
            this.loadAllproduct();


        },
        data() {
            return {
                // products:[],
                // product_media: [],
                // product_discounts: [],
                // product_has_discounts: [],
                // product_categories: [],
                // product_has_ca-0potegories: [],
                // product_stocks: [],
                allproducts: [],
            }
        },
        props: {
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
        },


        created() {
        },

        methods: {
            // loadProduct(){
            //     axios.get('/api/products')
            //     .then((response) =>{
            //         this.products = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductMedia(){
            //     axios.get('/api/product_media')
            //     .then((response) =>{
            //         this.product_media = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductDiscount(){
            //     axios.get('/api/product_discounts')
            //     .then((response) =>{
            //         this.product_discounts = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductHasDiscount(){
            //     axios.get('/api/product_has_discounts')
            //     .then((response) =>{
            //         this.product_has_discounts = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductCategorie(){
            //     axios.get('/api/product_categories')
            //     .then((response) =>{
            //         this.product_categories = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductHasCategorie(){
            //     axios.get('/api/product_has_categories')
            //     .then((response) =>{
            //         this.product_has_categories = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },

            // loadProductStock(){
            //     axios.get('/api/product_stocks')
            //     .then((response) =>{
            //         this.product_stocks = response.data.data;
            //     })
            //     .catch(function(error){
            //         console.log(error);
            //     });
            // },
            loadAllproduct(){
                axios.get('/api/allproducts')
                .then((response) =>{
                    this.allproducts = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },


            remove() {
                this.$root.$emit('remove')
            },
            removeProduct(index) {
                this.$root.$emit('remove-product', index)
            },

            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },
            updateProduct(product, index, updateType) {
                this.$root.$emit('update-product', product,index, updateType)
            },

        },
    }
</script>