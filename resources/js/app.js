/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue');


import moment from 'moment'
Vue.prototype.moment = moment
//Vue.use(require('vue-moment'));
Vue.filter('format', function (value, display) {
  if (!value) return ''
  return moment(value).format(display);
})
 

// Registering components locally
import Navbar from './components/partials/Navbar.vue';
import Footer from './components/partials/Footer.vue';

const app = new Vue({

  el: '#app',

  components: { 
    'navbar': Navbar,
    'foot' : Footer,
  },


});
