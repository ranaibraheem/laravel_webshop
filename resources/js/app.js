/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { distanceAndSkiddingToXY } = require('@popperjs/core/lib/modifiers/offset');
const { defaultsDeep, isEmpty } = require('lodash');

import axios from 'axios';
 import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue').default;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('detail-component', require('./components/DetailComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import ProductComponent from './components/ProductComponent';
// import CartComponent from './components/CartComponent';

const app = new Vue({
    el: '#app',
    props: {
		productindex:{
			type:Number
		}
	},

	data: {
		brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
		appName: 'Coffee Products',
		// products:[],
		// product_media: [],
		// product_discounts: [],
		// product_has_discounts: [],
		// product_categoies: [],
		// product_has_categories: [],
		// product_stocks: [],
		allproducts: [],
        product_filter: 'all',
		filters :'all',
		shoppingCart: [],
		totalPrice: 0,
		totalQuantity: 0,
		// productindex:0
	},

	created() {
		this.totalPrice = localStorage.getItem('totalPrice') !== null ? parseFloat(localStorage.getItem('totalPrice')) : 0;
		this.totalQuantity = localStorage.getItem('totalQuantity') !== null ? parseInt(localStorage.getItem('totalQuantity')) : 0;
		localStorage.getItem('totalQuantity');
		localStorage.getItem('totalPrice');
		localStorage.getItem('productindex');
	},

	computed: {
		title() {
			return this.brand + " " + this.appName
		},
	},

	methods: {

		        /**
         * Adds a new product to the cart or changes the amount of an 
         *  existing product in the cart
         * @param product (object)
         * @returns void
         */

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
		// 	axios.get('/api/product_has_discounts')
		// 	.then((response) =>{
		// 		this.product_has_discounts = response.data.data;
		// 	})
		// 	.catch(function(error){
		// 		console.log(error);
		// 	});
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
		// 	axios.get('/api/product_stocks')
		// 	.then((response) =>{
		// 		this.product_stocks = response.data.data;
		// 	})
		// 	.catch(function(error){
		// 		console.log(error);
		// 	});
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

		addToCart(product) {
			this.allproducts.forEach(item => {
				if(item.id === product.id){
					if(!this.shoppingCart.some(elem => elem.id === item.id)){
						this.shoppingCart.push(item);
						this.totalQuantity++;
						item.quantity++;
						item.stock--;

						if (item.onsale30) {
							this.totalPrice += (parseFloat(item.price))*30/100
						} else if (item.onsale50) {
							this.totalPrice += (parseFloat(item.price))*50/100
						} else {
							this.totalPrice += parseFloat(item.price);
						}

						localStorage.setItem('totalQuantity', this.totalQuantity);
						localStorage.setItem('totalPrice', this.totalPrice);

					}else{
						this.shoppingCart.forEach(ele => {
							if(ele.id === product.id){
								ele.quantity++
								ele.stock--;
						this.totalQuantity++;
						if (ele.onsale30) {
							this.totalPrice += parseFloat(ele.price)*30/100;

						} else if (ele.onsale50) {
							this.totalPrice += parseFloat(ele.price)*50/100;

						} else {
							this.totalPrice += parseFloat(ele.price);
						}
						localStorage.setItem('totalQuantity', this.totalQuantity);
						localStorage.setItem('totalPrice', parseFloat(this.totalPrice));
					}
				})
					}
				}
			})
		},
		
		updateItem(product, index, updateType){
			this.shoppingCart.forEach(cart =>{
				if(cart.id === product.id){
					if(updateType === 'add'){
						
						cart.quantity++;
						cart.stock--;
						this.totalQuantity++;
						if(cart.onsale30){
							this.totalPrice += parseFloat(cart.price*30/100);
						}else if(cart.onsale50){
							this.totalPrice += parseFloat(cart.price*50/100);
						}else{
							this.totalPrice += parseFloat(cart.price);
						}
						localStorage.setItem('totalQuantity', this.totalQuantity)
						localStorage.setItem('totalPrice', this.totalPrice)
						
					}else{
						if(cart.quantity>1){
							this.totalQuantity--;
							cart.quantity--;
							cart.stock++;
							if(cart.onsale30){
								this.totalPrice -= cart.price*30/100;
							}else if(cart.onsale50){
								this.totalPrice -= cart.price*50/100;
							}else{
								this.totalPrice -= cart.price;
							}
						}else{
							this.shoppingCart.splice(index, 1);
							this.totalQuantity--;
							cart.quantity--;
							cart.stock++;
							if(cart.onsale30){
								this.totalPrice -= cart.price*30/100;
							}else if(cart.onsale50){
								this.totalPrice -= cart.price*50/100;
							}else{
								this.totalPrice -= cart.price;
							}
						}
						localStorage.removeItem('shoppingCart');
						localStorage.totalQuantity = this.totalQuantity
						localStorage.totalPrice = this.totalPrice
					}
				}
			})
		},

		removeAll() {
			this.shoppingCart.forEach(cart =>{
				cart.stock+=cart.quantity;
				cart.quantity = 0;
			})
			this.shoppingCart = [],
			this.totalPrice = 0
			this.totalQuantity = 0

			localStorage.removeItem('totalQuantity');
			localStorage.removeItem('totalPrice');
			localStorage.removeItem('shoppingCart');
		},
		
		removeItem(index) {
			this.totalQuantity -= this.shoppingCart[index].quantity

			if (this.shoppingCart[index].onsale30) {
				this.totalPrice -= (this.shoppingCart[index].price*30/100)*this.shoppingCart[index].quantity
			} else if (this.shoppingCart[index].onsale50) {
				this.totalPrice -= (this.shoppingCart[index].price*50/100)*this.shoppingCart[index].quantity
			} else {
				this.totalPrice -= this.shoppingCart[index].price*this.shoppingCart[index].quantity
			}

			this.shoppingCart[index].stock += this.shoppingCart[index].quantity
			this.shoppingCart[index].quantity = 0
			this.shoppingCart.splice(index, 1)

			localStorage.totalQuantity = this.totalQuantity
			localStorage.totalPrice = this.totalPrice
		},
		detail(index){
			this.productindex == index;
				localStorage.setItem('productindex', index);
				}
	},
	
	mounted() {


		if (localStorage.shoppingCart) {	
			this.shoppingCart = JSON.parse(localStorage.shoppingCart);
		}

		this.$on('update-cart', (product) => {
			this.addToCart(product)
		})

		this.$on('remove', () => {
			this.removeAll()
		})
		this.$on('remove-product', (index) => {
			this.removeItem(index)
		})

		this.$on('update-product', (product, index, updateType) => {
			this.updateItem(product, index, updateType)
		})
		this.$on('detail', (index) => {
			this.detail(index)
		})


		// this.loadProduct();
		// this.loadProductMedia();
		// this.loadProductDiscount();
		// this.loadProductHasDiscount();
		// this.loadProductCategorie();
		// this.loadProductHasCategorie();
		// this.loadProductStock();
		this.loadAllproduct();

	},

	watch: {

		shoppingCart: {
			handler(newUpdate) {
				localStorage.shoppingCart = JSON.stringify(newUpdate);
			},
			deep: true
		},
    },
	
});
Vue.config.devtools = true
Vue.config.productionTip = false
