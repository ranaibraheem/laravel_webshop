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
                            <span v-if="product.onSale30">
                                <span class="newPrice30"> <b>$ {{(product.price - (product.price * 30 / 100))*product.quantity}}</b>
                                    <span id="saleBorder">Sale 30%</span>
                                </span>
                            </span>
                            <span v-else-if="product.onSale50">
                                <span class="newPrice50"> <b>$ {{(product.price - (product.price * 50 / 100))*product.quantity}}</b>
                                    <span id="saleBorder"> Sale 50%</span>
                                </span>
                            </span>
                            <span v-else><b>$ {{product.price*product.quantity}}</b></span><br>
                            <span>
                                <span id="shopping">Delete:</span>
                                <i class="fa fa-trash-o" id="deletBtn" @click="removeProduct(index)"></i>
                            </span>
                            <div class="col-md-12">
                                <img :src="'/public/images/webshop/' + product.image" width="40%">
                                <span>&#x1F6D2;</span>
                                <button class="addToCart btn btn-primary" @click="updateCart(product,'substract')"
                                    :disabled="product.stock === 0 && product.quantity===0"
                                    :class="{disabledButton: product.stock===0 && product.quantity===0}">-
                                </button>
                                <span>{{product.quantity}}</span>
                                <button class=" addToCart btn btn-primary" @click="updateCart(product,'add')"
                                    :disabled="product.stock === 0" :class="{disabledButton: product.stock === 0}">+
                                </button>
                            </div><hr>
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
            this.loadProducts();
            this.loadProductMedia();

        },
        data() {
            return {
                products:[],
                product_media: [],
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
                type: Number,
                default: 0,
            },
        },


        created() {  
        },

        methods: {
            loadProducts(){
                axios.get('/api/products')
                .then((response) =>{
                    this.products = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },

            loadProductMedia(){
                axios.get('/api/product_media')
                .then((response) =>{
                    this.product_media = response.data.data;
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

            updateCart(product, updateType) {
                this.$root.$emit('update-cart', product, updateType)
            },
        },
    }
</script>