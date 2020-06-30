require('./bootstrap');
import chart from './doughnut';

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});

$(document).ready(function () {
    chart.doughnut();
})