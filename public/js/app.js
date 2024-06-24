// Import necessary libraries or dependencies
import Vue from 'vue';
import App from './App.vue';
import router from './router';

// Initialize Vue app
const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
