<template>
    <div>
        <div class="products block">
            <div class="products block" :class="{'lds-spinner':loading}"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                <div class="product_card card container-fluid col-md-5"  v-for="(product, index) in products" :key="product.id" v-show="product.showstatus">
                    <a :href="imagePath + product.image">
                        <img :src="imagePath+product.image" class="card-img-top" :alt="product.alt" >
                    </a>
                    <div class="card-body">
                        <h5>{{product.name}}</h5><hr>
                        <p v-if="product.onsale30"><b>Sale 30%</b> 
                            <span class="onSale">{{product.price}}$</span><br>
                            <span class="newPrice30"> New Price: <b>{{product.price*30/100}}$</b></span>
                        </p>
                        <p v-else-if="product.onsale50"><b>Sale 50%</b>
                            <span class="onSale">{{product.price}}$</span><br>
                            <span class="newPrice50"> New Price: <b>{{product.price*50/100}}$</b></span>
                        </p>
                        <p v-else>Price: {{product.price}}$</p>
                        <p class="soldOut" v-if="product.stock===0">Sold Out</p>
                        <p class="soldOut" v-else-if="product.stock<=5 && product.stock>0">Almost Sold Out</p>
                        <p v-else-if="product.stock>5">In Stock</p>
                        <span>&#x1F6D2;</span>
                        <button class="addToCart btn btn-primary" @click="updateCart(product)" :disabled="product.stock === 0" :class="{disabledButton: product.stock === 0}">Add </button>
                        <a :href="'detail/' + product.id">
                            <button class="btn btn-primary" @click="detail(index)">More Details</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
       
        props:{
            machines:{
                type: Array,
                default:[]
            },
            beans:{
                type: Array,
                default:[]
            },

            cups:{
                type: Array,
                default:[]
            },
        },

        data() {
            return {
                // products:[],
                // product_media: [],
                // product_discounts: [],
                // product_has_discounts: [],
                // product_categories: [],
                // product_has_categories: [],
                // product_stocks: [],
                products: [],
                imagePath: '/images/webshop/',
                loading: true,
            }
        },

        mounted() {
            // console.log('Component mounted.')
            // this.loadProduct();
            // this.loadProductMedia();
            // this.loadProductDiscount();
            // this.loadProductHasDiscount();
            // this.loadProductCategorie();
            // this.loadProductHasCategorie();
            // this.loadProductStock();
            this.loadproduct();
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
            loadproduct(){
                axios.get('/api/products')
                .then((response) =>{
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function(error){
                    console.log(error);
                });
            },

            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },
            detail(index){
                this.$root.$emit('detail', index)
            },
        },
    }
</script>
