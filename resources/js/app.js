
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const navApp = new Vue({
    el: '#navApp',
    data: {
        languageSelected: document.documentElement.lang
    },
    methods: {
        languageSelection: function () {
            window.location.href = '/' + this.languageSelected;
        },
        bookingNavigate: function () {
            window.location.href = '/reserva';
        }
    }
});

/**
 * Scroll navigation
 */

$(document).on('click', '.scroll-link', function(e) {
    e.preventDefault();

    $('#navbar_toggler_control').click();

    var href = $(this).attr('href');

    console.log(href);

    var top = $(href).offset().top;

    var body = $("html, body");
    body.stop().animate({scrollTop:top - 90}, 500, 'swing', function() {});
});
