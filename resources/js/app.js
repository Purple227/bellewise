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
 import VuePlaceAutocomplete from 'vue-place-autocomplete';



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
 Vue.use(VuePlaceAutocomplete);


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

      verification: {
        code: null,
        loader: false,
        status: null,
        resendCode: false,
      },

      registerDetails: {
        name: " ",
        email: null,
        phone: null,
        password: null,
        passwordConfirmation: null,
        address: " ",
        countryCode: '234',
        loader: false,
        errors: {},
        status: null,
      },

      loginDetails: {
        emial: null,
        password: null,
        errors: null,
        loader: null,
      },

      contact: {
        emial: null,
        subject: null,
        message: null,
        loader: false,
      },

      details: false,
      address: null,

      isActive: false,
      isDropDown: false,
      date: new Date(),
      toggleNotify: true,

      payment: false,
      paymentToggle: false,
      confirm: false,
      orderStatus: false,
      faqMenu: false,
      search: false,

    }
  },


  validations: { // Validation calibrace open

    registerDetails: {

      name: {
        required,
        maxLength: maxLength(30)
      },

      address: {
        required,
      },

      email: {
        required,
        email,
        maxLength: maxLength(255)
      },
      
      phone: {
        required,
        minLength: minLength(10),
        maxLength: maxLength(10)
      },

      password: {
        required,
        minLength: minLength(6)
      },

      passwordConfirmation: {
        sameAsPassword: sameAs('password')
      },

    }, // RegistrationDetails calibrace closes


    loginDetails: { //LoinDetails calibrace open

      email: {
        required,
        email,
      },

      password: {
        required,
        minLength: minLength(6)
      },

    }, //Loindetails calibrace close

      contact: { //Contact calibrace open

        email: {
          required,
          email
        },

        subject: {
          required,
        },

        message: {
          required,
        }

      }, //Contact calibrace closes


    verification: { //Verification calibrace open

      code: {
        required,
        minLength: minLength(4),
        maxLength: maxLength(4)
      }

    } //Verification calibrace close


  }, // Validation calibrace close



  created() {
    this.getUserLoctionInfo()
  },

  methods: { //Method calibrace open

    verifyMethod() { // Verify method calibrace open 
      let self = this
      self.verification.loader = true
      Vue.axios.patch('/verification' + window.localStorage.getItem('userId'), {
        code: this.verification.code.toString(),
        user_verification_id: window.localStorage.getItem('userVerificationId').toString(),
      }).then((response) => {
        window.localStorage.removeItem('userPassword')
        window.localStorage.removeItem('userEmail')
        window.location ='/'
      }).catch(error=>{
        self.verification.loader = false
        self.verification.status = " Error Processing code try again or request a new code in 380 seconds"
      })

  }, // Verify method calibrace close

  resendCode() {
    let self = this
    self.verification.loader = true
    Vue.axios.post('/api/resend-code', {
      user_phone: window.localStorage.getItem('userPhone').toString(),
    }).then((response) => {
      window.localStorage.setItem('userVerificationId', response.data)
      self.verification.status = 'Code resend successful'
    }).catch(error=>{
      self.verification.loader = false
      self.verification.status = 'Please wait for atleast 380 seconds before requesting a new code.'
    })

  },

  registerPostMethod() {
    let self = this
    self.registerDetails.loader = true
    Vue.axios.post('/api/user', {
      name: this.registerDetails.name,
      address: this.registerDetails.address,
      phone: this.registerDetails.countryCode + this.registerDetails.phone,
      password: this.registerDetails.password,
      email: this.registerDetails.email
    })
    .then(function (response) {
      window.localStorage.setItem('userId', response.data.user_id)
      window.localStorage.setItem('userVerificationId', response.data.user_verification_id)
      window.localStorage.setItem('userPhone', response.data.user_phone)
      window.localStorage.setItem('userPassword', response.data.user_password)
      window.localStorage.setItem('userEmail', response.data.user_email)
      window.location ='/verification'
    })
    .catch(function (error) {
      self.registerDetails.loader = false
      self.registerDetails.errors = error.response.data
    });

  },

  loginMethod() {

    let self = this
    self.loginDetails.loader = true
    Vue.axios.post('/user/login', {
      email: this.loginDetails.email,
      password: this.loginDetails.password,
    })
    .then(function (response) {

      window.localStorage.setItem('userEmail', response.data.email)
      window.localStorage.setItem('userPassword', response.data.password)
      window.localStorage.setItem('userPhone', response.data.phone)

      let verify = response.data.verify
      url_redirect =  verify == 'verify' ?  window.location ='/' : window.location ='/verification'

    })
    .catch(function (error) {
      self.loginDetails.loader = false
      self.loginDetails.errors = error.response
    });

  },

  logoutMethod() {
    Vue.axios.post('/logout')
    .then(function (response) {
      window.location.reload()
    })
  },


  addActiveClass() {
    this.isActive = !this.isActive;
  },

  openDropDown() {
    this.isDropDown = !this.isDropDown;
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

  },

  }, //Method calibrace close


});
