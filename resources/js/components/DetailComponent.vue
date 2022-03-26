
<template>
    <div v-if="products[productindex]">
        <section>
            <div class="products block" style="padding:2em">
                <img :src="imagePath + products[productindex].image" class="col-5"  height="700px">
                <div class="col-5" id="detail" style="padding:2em">
                    <h3><b>Name: </b> {{products[productindex].name}} </h3>
                    <h3> {{products[productindex].info}} </h3><hr>
                    <h4><b>Description: </b><br> {{products[productindex].description}}</h4><hr>

                    <h3 v-if="products[productindex].onsale30"><b>Sale 30%</b><br>
                        <b>Old Price: </b><span class="onSale">{{products[productindex].price}}$</span><br>
                        <span class="newPrice30"> New Price: <b>{{products[productindex].price*30/100}}$</b></span><hr>
                    </h3>
                    <h3 v-else-if="products[productindex].onsale50"><b>Sale 50%</b>
                        <span class="onSale">{{products[productindex].price}}$</span><br>
                        <span class="newPrice50"> New Price: <b>{{products[productindex].price*50/100}}$</b></span><hr>
                    </h3>
                    <h3 v-else>Price: {{products[productindex].price}}$</h3>
                    <h3 class="soldOut" v-if="products[productindex].stock===0">Sold Out</h3>
                    <h3 class="soldOut" v-else-if="products[productindex].stock<=5 && products[productindex].stock>0">Almost Sold Out</h3>
                    <h3 v-else-if="products[productindex].stock>5">In Stock </h3>
                    <h3>
                        <button class="addToCart btn btn-primary" @click="updateCart(products[productindex])"><h4>Order &#x1F6D2;</h4></button>
                    </h3>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.loadproduct();
        },
      
        data() {
            return {
                products:[],
                imagePath: '/images/webshop/',
                shoppingCart:[],
            }
        },
        props:{
        },
        created() {
            this.productindex=localStorage.getItem('productindex')
        },
        methods: {
            detail(index) {
                this.$root.$emit('detail', index)
            },
            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },

            loadproduct(){
                axios.get('/api/products')
                .then((response) =>{
                    this.products = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
        },
    }
</script>
