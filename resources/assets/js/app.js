require('./bootstrap');

window.Vue = require('vue');

// Vue.component('example', require('./components/Example.vue')); // 注释掉
import Hello from './components/Hello.vue'; // 引入Hello 组件

const app = new Vue({
    el: '#app',
    render: h => h(Hello)
});