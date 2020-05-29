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
 

// Registering components locally e.g below
// import Example from './components/ExampleComponent.vue';

const app = new Vue({

  el: '#app',

  components: { 
    // Local components here e.g below
    // 'example': Example,
  },




  data() {

  return{
      isActive: false,
      isDropDown: false,
      store: true,
      selectStore : false,
      closed: true,
      confirm: false,
    }
  },

  methods: {

    addActiveClass() {
      this.isActive = !this.isActive;
    },

    openDropDown() {
      this.isDropDown = !this.isDropDown;
    },

    demoPicker () {
      this.store = false;
      this.selectStore = true;
    },

    demoCheck() {
      this.closed = false;
      this.confirm = true;
    }

  },


});
