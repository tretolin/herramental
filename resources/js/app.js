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


    $('.rent-item').click(function () {
        $(window).resize();
        if($('.detail-charge').eq(0).css('display') == 'none') {
            $('.detail-charge').fadeIn();
        } else {
            $('.detail-charge').fadeOut(function () {
                $('.detail-charge').fadeIn();
            });
        }
    });

    $('.close-detail').click(function () {
        $('.detail-charge').fadeOut();
    });

    $(window).resize(function () {
        var h = $(window).height();
        var w = $(window).width();
        $('.modal-content').css({
            width: w,
            height: h
        })
        // console.log('res', wHeight)

        // $('.full-detail').css('height', wHeight);
    });

    $('#detail-modal').on('show.bs.modal', function() {
        let rest = 10;
        var resize = setInterval(function () {
            $(window).resize();
            if (rest-- < 1) {
                clearInterval(reset);
            }
        }, 100);
    });

    $(window).resize();
})