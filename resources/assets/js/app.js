
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.prettyPhoto');
require('./owl.carousel.min');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import Vue from 'vue';


Vue.use(VueRouter)

const index = require('./components/IndexComponent.vue');
const home = require('./components/HomeComponent.vue');
const rest_list = require('./components/Res_listComponent.vue');
const foodOrder = require('./components/Food_orderComponent.vue');
const foodCheckout = require('./components/Food_checkoutComponent.vue');
const hotelProfile = require('./components/Hotel_profileComponent.vue');

const routes = [
{
    path: '/',
    component: index
},
{
    path: '/home',
    component: home
},
{
    path: '/rest_list',
    component: rest_list
},
{
    path: '/food_order',
    component: foodOrder
},
{
    path: '/food_checkout',
    component: foodCheckout
},
{
    path: '/hotel_profile',
    component: hotelProfile
},

];
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('chat', require('./components/ChatComponent.vue'));

const router= new VueRouter({
    routes
});

Vue.component('header_com', require('./components/HeaderComponent.vue'));
Vue.component('footer_com', require('./components/FooterComponent.vue'));

const app = new Vue({
    el: '#app',
    router, 
});


