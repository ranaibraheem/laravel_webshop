<template>
    <div>
        <div class="products block">
            <div class="title_products" ><p>BEANS</p></div>
            <div class="products block" :class="{'lds-spinner':loading}"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                <div class="product_card card container-fluid col-md-5"  v-for="(product, index) in beans" :key="product.id" v-show="product.showstatus">
                    <div v-for="productimage in product_media" :key="productimage.product_id">
                        <span v-if="productimage.product_id === product.id">
                            <a :href="imagePath + productimage.file_name">
                                <img :src="imagePath+productimage.file_name" class="card-img-top" :alt="productimage.alt" >
                            </a>
                        </span>
                    </div>
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
            beans:{
                type: Array,
                default:[]
            },
        },

        data() {
            return {
                products: [],
                product_media:[],
                imagePath: '/images/webshop/',
                loading: true,
            }
        },

        mounted() {
            this.loadProduct();
            this.loadProductMedia();
        },

         created() {
        },

        methods: {
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



            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },
            detail(index){
                this.$root.$emit('detail', index)
            },
        },
    }
</script>
