
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
Vue.use(iView);
Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('p-nav', require('./components/nav.vue'));

Vue.component('edit_profile', require('./components/edit_profile.vue'));

Vue.component('date', require('./components/date.vue'))
const app = new Vue({
    el: '#app'
});
