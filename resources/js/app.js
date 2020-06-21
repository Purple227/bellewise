/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

window.Vue = require('vue');


 import axios from 'axios';
 import VueAxios from 'vue-axios';
 import VueGeolocation from 'vue-browser-geolocation';
 import * as VueGoogleMaps from 'vue2-google-maps';
 import Vuelidate from 'vuelidate';


 Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyDMMvXXoWKcvj12iqduwt5l294fLPBsuaM',
    libraries: 'places', // This is required if you use the Autocomplete plugin
  },
   //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  /// installComponents: true,
});

 Vue.use(VueGeolocation);
 Vue.use(VueAxios, axios);
 Vue.use(Vuelidate);

 import moment from 'moment'
 Vue.prototype.moment = moment
//Vue.use(require('vue-moment'));
Vue.filter('format', function (value, display) {
  if (!value) return ''
    return moment(value).format(display);
})

Vue.filter('characterCounter', function (value) {
  if (!value) return 0
    return value.length;
})


// Registering components locally e.g below
// import Example from './components/ExampleComponent.vue';

import bulmaCalendar from 'bulma-calendar/dist/js/bulma-calendar.min.js';
import { required, minLength, maxLength, sameAs, email } from 'vuelidate/lib/validators'

const app = new Vue({

  el: '#app',
  components: { 
    // Local components here e.g below
  },


  data() {

    return{


      coordinates: {
        lat: 0,
        lng: 0,
        status: null,
      },   

      confirmDetails: {
        name: 'Customer Registered Name',
        phone: '080XXXXXXXX',
        address: null,
      },

      registerDetails: {
        name: "Purple Cole",
        email: "Purple@gmail.com",
        phone: '080XXXXXXXX',
        password: null,
        passwordConfirmation: null,
        address: "",
      },

      loginDetails: {
        emial: null,
        password: null,
      },

      details: false,
      address: null,

      isActive: false,
      orderStaus: false,
      isDropDown: false,
      closed: true,
      confirm: false,
      date: new Date(),
      cart: true,
      checkout: false,
      payment: true,
      toggleNotify: true,
    }
  },

  validations: { // Validation calibrace open

    confirmDetails: { // Form calibrace open
      name: {
        required,
        maxLength: maxLength(30)
      },
      phone: {
        required,
        minLength: minLength(11),
        maxLength: maxLength(11)
      },
      address: {
        required,
        minLength: minLength(6)
      },
    }, // Form calibrace close


    registerDetails: {
      name: {
        required,
        maxLength: maxLength(30)
      },
      email: {
        required,
        email,
        maxLength: maxLength(255)
      },
      address: {
        required,
        minLength: minLength(6)
      },
      
      phone: {
        required,
        minLength: minLength(11),
        maxLength: maxLength(11)
      },

      password: {
        required,
        minLength: minLength(6)
      },
      passwordConfirmation: {
        sameAsPassword: sameAs('password')
      },
    }, // RegistrationDetails calibrace closes

    loginDetails: {
      email: {
        required,
        email,
      },
      password: {
        required,
        minLength: minLength(6)
      },
    },

    address: {
      required,
      minLength: minLength(6)
    },

    email: {
      required,
      email,
    },

  }, // Validation calibrace close

  mounted() {
    this.getUserLoctionInfo()
  },

  methods: { //Method calibrace open

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

    storeDemoCheck() {
      this.closed = false;
      this.confirm = true;
    },

    cartCheckoutSwitch() {
      this.cart = false;
      this.checkout = true;
    },

    confirmMethod() {
      this.cart = false;
      this.checkout = false;
      this.details = true;
    },

    orderMethod() {
      this.cart = false;
      this.checkout = false;
      this.details = false;
      this.orderStaus = true;
    },

    bulmaCalendar() {
      const calendar = bulmaCalendar.attach(this.$refs.calendarTrigger, {
        startDate: this.date,
      })[0]
      calendar.on('date:selected', e => (this.date = e.start || null))
    },

    getUserLoctionInfo() {
      this.$getLocation({
        enableHighAccuracy: true, //defaults to false
      })
      .then(coordinates => {
        this.coordinates.lat = coordinates.lat
        this.coordinates.lng = coordinates.lng
      })
      .catch(function (error) {
        this.coordinates.status = 'Pls Allow Location Permission'
      })

      setTimeout(() => { // Timeout calibrace open 
        this.axios.get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" + this.coordinates.lat + "," + this.coordinates.lng + "&key=AIzaSyDMMvXXoWKcvj12iqduwt5l294fLPBsuaM", true)
        .then((response) => {
          console.log(response)
          console.log(response.data.results[0].formatted_address)
// Ideally you'd search for the index with type = sublocality in address_components
this.address = response.data.results[0].formatted_address
console.log(" Your address is" + this.address);
})
 }, 800) // Timeout calibrace close

    },


  }, //Method calibrace close

  computed: {
    niceDate() {
      if (this.date) {
        return this.date.toLocaleDateString()
      }
    },

  }, 

});
