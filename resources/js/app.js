
require('./bootstrap');

window.Vue = require('vue');
const Vuex = require('vuex');

window.store = new Vuex.Store({
        state: {
                productsCount: 0
        },
        mutations: {
                increment(state) {
                        return state.productsCount++;
                },
                set(state, value) {
                        return state.productsCount = value;
                }
        }
})

Vue.component('lista-productos', require('./components/products/ProductosComponent.vue').default);
Vue.component('product-card', require('./components/products/ProductCardComponent.vue').default);
Vue.component('product-card-add', require('./components/products/addToCarComponent.vue').default);
Vue.component('material-animation', require('./components/animations/MaterialTransition.vue').default);
Vue.component('products-count', require('./components/shoppint_cart/counterComponent.vue').default);
Vue.component('product-list', require('./components/shoppint_cart/ProductsShoppingCartComponent.vue').default);


const app = new Vue({
        el: '#app'
})