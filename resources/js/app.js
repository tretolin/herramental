require('./bootstrap');
import chart from './doughnut';

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});

$(document).ready(function () {
    chart.doughnut();
    
    $('.chart').click(function () {
        if($('.tooltip-el').eq(0).hasClass('d-block')) {
            $('.tooltip-el').removeClass('d-block')
            $('.tooltip-el').addClass('d-none')
        } else {
            $('.tooltip-el').addClass('d-block')
            $('.tooltip-el').removeClass('d-none')
        }
    });
})