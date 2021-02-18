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

 //window.axios.defaults.withCredentials = true;
 //window.axios.defaults.baseURL = 'https://admin.bellewisefoods.com';


 import moment from 'moment'
 Vue.prototype.moment = moment
//Vue.use(require('vue-moment'));
Vue.filter('format', function (value, display) {
  if (!value) return ''
    return moment(value).format(display);
})

Vue.filter('money', function (value, number) {
  if (!value) return ''
    return value.toFixed(number)
})

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

import bulmaCalendar from 'bulma-extensions/bulma-calendar/dist/js/bulma-calendar.min.js';
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

      confirmDetail: {
        name: null,
        phone: null,
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

      restaurantPagination: {
        nextPageUrl: null,
        previousPageUrl: null, 
        to: null,
        total: null,
      },
      
      menuPagination: {
        nextPageUrl: null,
        previousPageUrl: null, 
        to: null,
        total: null,
      },

      details: false,
      address: null,

      isActive: false,
      isDropDown: false,
      tinkerToggle: false,


      date: new Date(),
      toggleNotify: true,

      payment: false,
      paymentToggle: false,
      confirm: false,
      faqMenu: false,
      search: false,
      orderSuccessToggle: false,

      status: null,
      searchResult: [],
      searchQuery: '',
      isSpinning: false,

      activeRestaurant: null,
      activeMenu: null,
      activeRestaurantName: window.localStorage.getItem('restaurantName'),
      activeRestaurantDiscount: window.localStorage.getItem('restaurantDiscount'),
      restaurantTiming: null,
      restaurantConfig: null,
      restaurantID: window.localStorage.getItem('restaurantID'),

      promo: {
        discount: window.localStorage.getItem('promoDiscount'),
        amount: window.localStorage.getItem('promoPrice')
      },

      cartWatcher: null,
      currentCartBasket: null,
      totalSumInBasket: null,

      mealCounter: 1,

      deliveryTime: null,

      currentAddress: null,

      orderHistory: null,
      orderPage: {
        nextPageUrl: null,
        previousPageUrl: null, 
        to: null,
        total: null,
      },

      termsCondition: null,
      privacyPolicy: null,
      homeWriteUp: null,
      deliveryCharge: null,

      loader: {
        button: false,
      },

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

      confirmDetail: { //Confirm calibrace open

        phone: {
          required
        },

        address: {
          required
        },

        name: {
          required
        },

      }, //Confirm calibrace closes


    verification: { //Verification calibrace open

      code: {
        required,
        minLength: minLength(4),
        maxLength: maxLength(4)
      }

    } //Verification calibrace close


  }, // Validation calibrace close



  mounted() {
    this.getHomeWriteUp()
    this.getUserLoctionInfo()
    this.activeRestaurantData()
    this.restaurantActiveMenu()
    this.cart()
    this.getRestaurantConfig()
    this.bulmaCalendar()
    this.getOrderHistory()
    this.getTermsCondition()
    this.getprivacyPolicy()
    this.getDeliveryCharge()
    //this.test()
    //this.createTerm().then(() => this.status = false )
  },

  methods: { //Method calibrace open

    verifyMethod() { // Verify method calibrace open 
      let self = this
      self.verification.loader = true
      Vue.axios.patch('/verification/' + window.localStorage.getItem('userId'), {
        code: this.verification.code.toString(),
        user_verification_id: window.localStorage.getItem('userVerificationId').toString(),
      }).then((response) => {
        window.localStorage.removeItem('userPassword')
        window.localStorage.removeItem('userEmail')
        window.location ='/login'
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
      self.loginDetails.errors = error.response.data
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
      Vue.axios
      .get("https://maps.googleapis.com/maps/api/geocode/json?latlng=" +this.coordinates.lat + "," +this.coordinates.lng +"&key=AIzaSyDMMvXXoWKcvj12iqduwt5l294fLPBsuaM")
      .then((response) => {
        this.currentAddress = response.data.results[0].formatted_address;
      })

    })
    .catch(function (error) {
      this.coordinates.status = 'Pls Allow Location Permission'
    })

  },

  activeRestaurantData(api) {
    this.status = true
    let api_url = api || "https://admin.bellewisefoods.com/api/restaurant/active"
    Vue.axios
    .get(api_url).then((response) => {
      this.activeRestaurant = response.data.data
      this.status = false

      let nextPageUrl = response.data.next_page_url
      this.restaurantPagination.nextPageUrl = nextPageUrl ? nextPageUrl : null

      let previousPageUrl = response.data.prev_page_url
      this.restaurantPagination.previousPageUrl =  previousPageUrl ? previousPageUrl : null

      this.restaurantPagination.to = response.data.to
      this.restaurantPagination.total = response.data.total

    }).catch(function (error) {
      this.status = false
    })
  },

  searchRestaurant() {
    this.isSpinning = true
    this.searchResult= []
    if(this.searchQuery.length > 1) {
      axios.get('https://admin.bellewisefoods.com/api/restaurant/search',{params: { search_query: this.searchQuery }}).then(response => {
        this.searchResult = response.data
        this.isSpinning = false
      });
    }
  },

  searchRestaurantMenu() {
    this.isSpinning = true
    this.searchResult= []
    if(this.searchQuery.length > 1) {
      axios.get('https://admin.bellewisefoods.com/api/restaurant-menu/search/' +window.localStorage.getItem('restaurantID'),{params: { search_query: this.searchQuery }}).then(response => {
        this.searchResult = response.data
        this.isSpinning = false
      });
    }
  },


  restaurantActiveMenu( name, ID,  discount, promoDiscount, promoPrice ) {

    this.status = true
    let checkID = ID == undefined ? '' : window.localStorage.setItem('restaurantID', ID)
    let api = name == undefined ? '' :  name.length >= 63 ? name : window.localStorage.setItem('restaurantName', name)
    let checkDiscount = discount == undefined ? '' : window.localStorage.setItem('restaurantDiscount', parseInt(discount))
    let checkPromoDiscount = promoDiscount == undefined ? '' : window.localStorage.setItem('promoDiscount', parseInt(promoDiscount))
    let checkPromoPrice = promoPrice == undefined ? '' : window.localStorage.setItem('promoPrice', parseInt(promoPrice))

    let api_url = api || "https://admin.bellewisefoods.com/api/restaurant-menu/active/" +window.localStorage.getItem('restaurantID')

    Vue.axios
    .get(api_url).then((response) => {
      this.activeMenu = response.data.data
      this.status = false

      let nextPageUrl = response.data.next_page_url
      this.menuPagination.nextPageUrl = nextPageUrl ? nextPageUrl : null

      let previousPageUrl = response.data.prev_page_url
      this.menuPagination.previousPageUrl =  previousPageUrl ? previousPageUrl : null

      this.menuPagination.to = response.data.to
      this.menuPagination.total = response.data.total

      this.status = false
    }).catch(function (error) {
      this.status = false
    })
  },


  getRestaurantConfig() {
    let api_url = "https://admin.bellewisefoods.com/api/restaurant-setting/" +window.localStorage.getItem('restaurantID')
    Vue.axios
    .get(api_url).then((response) => {
      this.restaurantConfig = response.data
      console.log(response)
    })
  },


  addToCart(ID, price, name, count) {
    console.log(ID, price, name, count)
    let item = JSON.parse(window.localStorage.getItem("cartItem"));
    item = item == null ? [] : JSON.parse(window.localStorage.getItem("cartItem"));
    item.push({ id:ID, price: parseFloat(price), name: name, count: count })
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cart()
  },

  removeFromCart(ID) {
    let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let index = item.findIndex(obj => obj.id == ID)
    console.log(index)
    item.splice(index, 1);
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cart()
  },

  upCounterEditInCart(ID, price, name, count) {
    count ++
    let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let index = item.findIndex(obj => obj.id == ID)
    item[index].id = ID
    item[index].price = price
    item[index].name = name
    item[index].count = count
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cart()
  },

  downCounterEditInCart(ID, price, name, count) {
    count --
    count = count <= 0 ? 1 : count 
    let item = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let index = item.findIndex(obj => obj.id == ID)
    item[index].id = ID
    item[index].price = price
    item[index].name = name
    item[index].count = count
    window.localStorage.setItem("cartItem", JSON.stringify(item)); //store cart item
    this.cart()
  },

  bulmaCalendar() {
// Initialize all input of date type.
const calendars = bulmaCalendar.attach('[type="date"]', '[color="info"]', );

// Loop on each calendar initialized
calendars.forEach(calendar => {
  // Add listener to date:selected event
  calendar.on('date:selected', date => {
    console.log(date);
  });
});

// To access to bulmaCalendar instance of an element
const element = document.querySelector('#delivery-time-id');
if (element) {
  // bulmaCalendar instance is available as element.bulmaCalendar
  element.bulmaCalendar.on('select', datepicker => {
    this.deliveryTime = datepicker.data.value();
  });
}
},    


cart() {

    this.currentCartBasket = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    //this.currentCartBasket.splice(0, 1)
    let allPrice =  this.currentCartBasket == null ? null : this.currentCartBasket.map(obj => obj.price );
    this.totalSumInBasket = allPrice == null ? null : allPrice.reduce((a, b) => a + b ,0)
/* 
   let cartItem = JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    this.currentCartBasket = cartItem == null ? [] : JSON.parse(window.localStorage.getItem("cartItem")); //get them back
    let allPrice =  this.currentCartBasket.length <= 1 ? null : this.currentCartBasket.map(obj => obj.price );
    allPrice = allPrice == null ? null : allPrice.splice(0, 1)
    console.log(allPrice)
    this.totalSumInBasket = allPrice == null ? null : allPrice.reduce((a, b) => a + b ,0)
    */

  },

  viewMenuMethod(name, description, price, image, ID) {
    let menu = {
      price: price,
      description: description,
      name: name,
      ID: ID,
      image: image,
    }
    console.log('no be winch')
    window.localStorage.setItem("singleMenu", JSON.stringify(menu)); //store cart item
  },

  upCounter() {
    this.mealCounter ++
  },

  downCounter() {
    this.mealCounter --
    let check = this.mealCounter <= 0 ? this.mealCounter = 1 : this.mealCounter
  },


  checkout(summary, orderStatus, phone, deliveryTime, address, basket, name, userID, orderCharge, totalPrice, paymentStatus, restaurantName) {
    
    this.loader.button = true

    let checkoutOrder = {
      summary: summary,
      paymentStatus: paymentStatus,
      phone: phone,
      deliveryTime: deliveryTime,
      address: address,
      basket: basket,
      name: name,
      userID: userID,
      orderCharge: orderCharge,
      totalPrice: totalPrice,
      orderStatus: orderStatus,
      restaurantName: restaurantName
    }

    console.log(checkoutOrder)
      window.localStorage.setItem("checkoutOrder", JSON.stringify(checkoutOrder)); //store

      Vue.axios.post('/api/order', {
        priceSummary: checkoutOrder.summary,
        paymentStatus: checkoutOrder.paymentStatus,
        phone: checkoutOrder.phone,
        deliveryTime: checkoutOrder.deliveryTime,
        address: checkoutOrder.address,
        basket: checkoutOrder.basket,
        name: checkoutOrder.name,
        userID: checkoutOrder.userID,
        totalPrice: checkoutOrder.totalPrice,
        orderCharge: checkoutOrder.orderCharge,
        orderStatus: checkoutOrder.orderStatus,
        restaurantName: checkoutOrder.restaurantName,
      })
      .then(function (response) {
        window.localStorage.clear()
        window.location ='/success'
      })
      .catch(function (error) {
        this.loader.button = false
      });

    },


    getOrderHistory(api) {
      this.status = true
      let api_url = api || '/auth/order' 
      Vue.axios
      .get(api_url).then((response) => {
        this.orderHistory = response.data.data
        this.status = false

        let nextPageUrl = response.data.next_page_url
        this.orderPage.nextPageUrl = nextPageUrl 

        let previousPageUrl = response.data.prev_page_url
        this.orderPage.previousPageUrl =  previousPageUrl 

        this.orderPage.to = response.data.to
        this.orderPage.total = response.data.total
      })
    },

    searchOrderHistory() {
      this.isSpinning = true
      this.searchResult= []
      if(this.searchQuery.length > 1) {
        axios.get('/auth/order/search',{params: { search_query: this.searchQuery }}).then(response => {
          this.searchResult = response.data
          this.isSpinning = false
        });
      }
    },

    getTermsCondition() {
      let api_url = "https://admin.bellewisefoods.com/api/setting/term/" +1
      Vue.axios
      .get(api_url).then((response) => {
        this.termsCondition = response.data
        console.log(response)
      })
    },

    getprivacyPolicy() {
      let api_url = "https://admin.bellewisefoods.com/api/setting/policy/" +1
      Vue.axios
      .get(api_url).then((response) => {
        this.privacyPolicy = response.data
        console.log(response)
      })
    },

    getHomeWriteUp() {
      let api_url = "https://admin.bellewisefoods.com/api/setting/write-up/" +1
      Vue.axios
      .get(api_url).then((response) => {
        this.homeWriteUp = response.data
        console.log(response)
      })
    },

    makePayment(summary, orderStatus, phone, deliveryTime, address, basket, name, userID, orderCharge, totalPrice, paymentStatus, restaurantName, mail) {


      let checkoutOrder = {
        summary: summary,
        paymentStatus: paymentStatus,
        phone: phone,
        deliveryTime: deliveryTime,
        address: address,
        basket: basket,
        name: name,
        userID: userID,
        orderCharge: orderCharge,
        totalPrice: totalPrice,
        orderStatus: orderStatus,
        restaurantName: restaurantName
      }

      window.localStorage.setItem("checkoutOrder", JSON.stringify(checkoutOrder)); //store

      FlutterwaveCheckout({
        public_key: "FLWPUBK-3493d4c3450de778b23d1d806821e44d-X",
        tx_ref: "hooli-tx-1920bbtyt",
        amount: summary,
        currency: "NGN",
        country: "NG",
        payment_options: "card",
      redirect_url: // specified redirect URL
      "https://www.bellewisefoods.com/success",
      meta: {
        consumer_id: userID,
        consumer_mac: "",
      },
      customer: {
        email: mail,
        phone_number: phone,
        name: name,
      },

      callback: function() {

        let checkoutOrder = JSON.parse(window.localStorage.getItem("checkoutOrder")); //get them back

        Vue.axios.post('/api/order', {
          priceSummary: checkoutOrder.summary,
          paymentStatus: checkoutOrder.paymentStatus,
          phone: checkoutOrder.phone,
          deliveryTime: checkoutOrder.deliveryTime,
          address: checkoutOrder.address,
          basket: checkoutOrder.basket,
          name: checkoutOrder.name,
          userID: checkoutOrder.userID,
          totalPrice: checkoutOrder.totalPrice,
          orderCharge: checkoutOrder.orderCharge,
          orderStatus: checkoutOrder.orderStatus,
          restaurantName: checkoutOrder.restaurantName,
        })
        .then(function (response) {
          window.localStorage.clear()
          window.location ='/success'
        })
        .catch(function (error) {
          this.loader.button = false
        });

      },

      onclose: function() {
        //console.log('we see')
      },
      customizations: {
        title: " Bellewise Foods",
        description: " Thanks for shopping with us. Your order is on it way",
        logo: window.location.href+'images/logo.webp',
      },
    });
    },

    clearStorage() {
      window.localStorage.clear()
      window.location.reload()
    },

    getDeliveryCharge() {
      let api_url = "https://admin.bellewisefoods.com/api/setting/dellivery-charge/" +1
      Vue.axios
      .get(api_url).then((response) => {
        this.deliveryCharge = response.data
        console.log(response)
      })
    },  

  /*test() {
    let api_url = "/api/all/order"
    Vue.axios
    .get(api_url).then((response) => {
      console.log(window.location.href+'images/logo.webp')
    })
  },*/  


  }, //Method calibrace close


computed: { // Computed calibrace open

 getSingleMenu() {
     let single = JSON.parse(window.localStorage.getItem("singleMenu")); //get them back
     return single
   },

} // Computed calibrace open



});
