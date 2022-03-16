
<template>
    <div v-if="allproducts[productindex]">
        <section>
            <div class="products block">
                <img :src="imagePath + allproducts[productindex].image" class="col-5"  height="700px">
                <div class="col-5" id="detail">
                    <h3><b>Name: </b><br> {{allproducts[productindex].name}} </h3>
                    <h3> {{allproducts[productindex].info}} </h3><hr>
                    <h4><b>Description: </b><br> {{allproducts[productindex].description}}</h4><hr>

                    <h3 v-if="allproducts[productindex].onsale30"><b>Sale 30%</b><br>
                        <b>Old Price: </b><span class="onSale">{{allproducts[productindex].price}}$</span><br>
                        <span class="newPrice30"> New Price: <b>{{allproducts[productindex].price*30/100}}$</b></span><hr>
                    </h3>
                    <h3 v-else-if="allproducts[productindex].onsale50"><b>Sale 50%</b>
                        <span class="onSale">{{allproducts[productindex].price}}$</span><br>
                        <span class="newPrice50"> New Price: <b>{{allproducts[productindex].price*50/100}}$</b></span><hr>
                    </h3>
                    <h3 v-else>Price: {{allproducts[productindex].price}}$</h3>
                    <h3 class="soldOut" v-if="allproducts[productindex].stock===0">Sold Out</h3>
                    <h3 class="soldOut" v-else-if="allproducts[productindex].stock<=5 && allproducts[productindex].stock>0">Almost Sold Out</h3>
                    <h3 v-else-if="allproducts[productindex].stock>5">In Stock </h3>
                    <h3>
                        <button class="addToCart btn btn-primary" @click="updateCart(allproducts[productindex])"><h3>Order &#x1F6D2;</h3></button>
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
            this.loadAllproduct();

        },
      
        data() {
            return {
                allproducts:[],
                imagePath: '/images/webshop/',
                shoppingCart:[],
            }
        },
        props:{
        },
        created() {
            this.productindex=localStorage.getItem('productindex')
        },
        computed:{
        },

        methods: {
            remove() {
                this.$root.$emit('remove')
            },
            removeProduct(index) {
                this.$root.$emit('remove-product', index)
            },

            detail(index) {
                this.$root.$emit('detail', index)
            },
            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },

            loadAllproduct(){
                axios.get('/api/allproducts')
                .then((response) =>{
                    this.allproducts = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
        },
    }
</script>
