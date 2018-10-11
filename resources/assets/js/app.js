
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import Vue from 'vue';
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

Vue.use(VueRouter)

const index = require('./components/IndexComponent.vue');
const home = require('./components/HomeComponent.vue');
const rest_list = require('./components/Res_listComponent.vue');
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
