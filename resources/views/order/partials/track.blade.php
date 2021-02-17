 @extends('layouts.app')

 @section('content')

 @verbatim

 <div class="container"> <!-- Container tag open -->

  <!-- Header section -->
  <section class="hero restaurant-hero box">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">
          Order Status
        </h1>
      </div>
    </div>
  </section>



  <!-- Sub list section of filter/search -->
  <div class="tabs is-toggle is-fullwidth">
    <ul>

      <li @click="search = !search">
        <a>
          <span class="icon is-small"><i class="fas fa-search orange" aria-hidden="true"></i></span>
          <span class="is-bold">Search</span>
        </a>
      </li>

    </ul>
  </div>


  <!-- Search input section -->
  <div class="field has-addons has-addons-centered" v-if="search">
    <div class="control has-icons-left is-expanded">
      <input class="input" type="text" placeholder="Search Order By ID" v-model="searchQuery" v-on:keyup="searchOrderHistory" autofocus>
      <span class="icon is-small is-left">
        <i class="fas fa-search orange"></i>
      </span>
    </div>
    <div class="control">
      <a class="button bg-orange is-bold has-text-white" v-bind:class="{ 'is-loading': isSpinning }">
        Search
      </a>
    </div>
  </div>

   <div class="card" v-if=" searchQuery.length >= 1? searchResult <= 1 : false">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">
        <span class="fa"> Order ID Not Found</span>
      </div>
    </div>
  </div>

   <div class="card" v-if=" searchQuery.length >= 1? searchResult : false">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">
        <span class="fa"> Order details for ID: {{ searchResult[0].order_id  }} </span>
      </div>
    </div>
  </div>

  <div class="box" v-if="orderHistory"> <!-- Box container tag open -->

   <!-- Second section -->

   <div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

    <div class="card">


     <nav class="level is-mobile">
      <div class="level-item has-text-centered">
       <div>
        <p class="is-bold"> Status </p>
        <p class="is-bold orange"> {{ searchQuery.length  > 1 ? searchResult[0].order_status : orderHistory[0].order_status }} </p>
      </div>
    </div>
    <div class="level-item has-text-centered">
     <div>
      <p class="is-bold"> Payment </p>
      <p class="is-bold orange">₦ {{ searchQuery.length  > 1 ? searchResult[0].price_summary : orderHistory[0].price_summary }} </p>
    </div>
  </div>
  <div class="level-item has-text-centered">
   <div>
    <p class="is-bold"> Items</p>
    <p class="is-bold orange"> {{ searchQuery.length  > 1 ? searchResult[0].tags.length : orderHistory[0].tags.length }} </p>
  </div>
</div>
</nav>

<hr>



<div class="card-content">
  <div class="content">

   <p class="is-bold"> Delivery Time {{ searchQuery.length  > 1 ? searchResult[0].delivery_time == null ? 'Immediately' : searchHistory[0].delivery_time : orderHistory[0].delivery_time == null ? 'Immediately' : orderHistory[0].delivery_time }} </p>

   <p class="is-bold">  {{ searchQuery.length  > 1 ? searchResult[0].restaurant_name : orderHistory[0].restaurant_name }} </p>


   <div class="notification is-light"> <!-- Notifacatin tag open -->

    <div class="columns"> <!-- Columns wrapper tag open -->

     <div class="column"> <!-- First column tag open -->
      <div class="content">
       <strong> Order Items </strong>
     </div>
   </div> <!-- First column tag close -->


   <div class="column"> <!-- Second column tag open -->

    <div class="content"> <!-- Content tag open -->

      <div class="dropdown" v-bind:class="{ 'is-active': tinkerToggle }" @click="tinkerToggle = !tinkerToggle">
        <div class="dropdown-trigger">
          <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
            <span> {{ searchQuery.length  > 1 ? searchResult[0].tags.length : orderHistory[0].tags.length }} </span>
            <span class="icon is-small">
              <i class="fas fa-angle-down orange" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
          <div class="dropdown-content">
            <a href="#" class="dropdown-item" v-for=" (tags, index) in searchQuery.length  > 1  ? searchResult[0].tags : orderHistory[0].tags ">
              <div class="tags has-addons">
                <span class="tag"> {{ tags.name.substring(0, 5) }}</span>
                <span class="tag"> <span class="orange is-bold"> {{ tags.count }} </span> </span>
                <span class="tag"> {{ tags.price }} </span>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div> <!-- Content tag close -->

  </div> <!-- Second column tag close -->


</div> <!-- Columns wrapper tag close -->

</div> <!-- Notifacatin tag close -->


<ul class="steps" style="list-style: none;">

  <li class="steps-segment" v-bind:class="{ 'is-active': searchQuery.length  > 1 ? searchResult[0].order_status == 'pending' : orderHistory[0].order_status == 'pending' }">
    <span class="steps-marker">
     <span class="icon ">
      <i class="fa fa-shopping-cart"></i>
    </span>
  </span>
  <div class="steps-content" >
   <p class="heading"> Placed </p>
 </div>
</li>

<li class="steps-segment" v-bind:class="{ 'is-active': searchQuery.length  > 1 ? searchResult[0].order_status == 'confirm' : orderHistory[0].order_status == 'confirm' }">
 <span class="steps-marker">
  <span class="icon">
   <i class="fa fa-check"></i>
 </span>
</span>
<div class="steps-content">
  <p class="heading">Confirm</p>
</div>
</li>

<li class="steps-segment" v-bind:class="{ 'is-active': searchQuery.length  > 1 ? searchResult[0].order_status == 'on_the_way' : orderHistory[0].order_status == 'on the way' }">
 <span class="steps-marker">
  <span class="icon">
   <i class="fa fa-truck"></i>
 </span>
</span>
<div class="steps-content">
  <p class="heading">On The Way</p>
</div>
</li>

<li class="steps-segment" v-bind:class="{ 'is-active': searchQuery.length  > 1 ? searchResult[0].order_status == 'delivered' : orderHistory[0].order_status == 'delivered' }">
 <span class="steps-marker">
  <span class="icon">
   <i class="fa fa-people-carry"></i>
 </span>
</span>
<div class="steps-content">
  <p class="heading"> Delivered </p>
</div>
</li>

</ul>



<hr>
<strong class="is-size-6"> Order Details </strong>

<br>
<br>

<div class="">
  <p class="is-bold is-inline">Order ID</p> 
  <p class="is-bold is-inline is-pulled-right"> {{ searchQuery.length  > 1 ? searchResult[0].order_id : orderHistory[0].order_id }} </p> 
</div>

<br>

<div class="">
  <p class="is-bold is-inline">Order</p> 
  <p class="is-bold is-inline is-pulled-right"> ₦ {{ searchQuery.length  > 1 ? searchResult[0].price : orderHistory[0].price }} </p> 
</div>
<br>
<div class="">
  <p class="is-bold is-inline">Delivery</p> 
  <p class="is-bold is-inline is-pulled-right"> ₦ {{ searchQuery.length  > 1 ? searchResult[0].order_charge : orderHistory[0].order_charge }} </p> 
</div>
<br>
<div class="">
  <p class="is-bold is-inline"> Summary</p> 
  <p class="is-bold is-inline is-pulled-right"> ₦ {{ searchQuery.length  > 1 ? searchResult[0].price_summary : orderHistory[0].price_summary }} </p> 
</div>

<hr>

<div class="">
  <p class="is-inline is-bold"> Payment Type</p> 
  <p class="is-inline is-bold is-pulled-right"> {{ searchQuery.length  > 1 ? searchResult[0].payment : orderHistory[0].payment }} </p>
</div>
<br>
<div class="">
  <p class="is-bold is-inline"> Placed </p> 
  <p class="is-bold is-inline is-pulled-right"> {{ searchQuery.length  > 1 ? searchResult[0].updated_at  : orderHistory[0].updated_at  | format('D MMM YYYY - h:mm A') }}  </p> 
</div>

</div>
</div>
<!--  				<footer class="card-footer">
 					<a href="/contact" class="card-footer-item is-bold has-text-black"> Contact Us </a>
 				</footer> -->
 			</div>

 		</div> <!-- is half column tag close -->

 	</div> <!-- box tag close-->




     <div class="card" v-else>
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">
        <span class="fa"> Order ID Not Found </span>
      </div>
    </div>
  </div>


 </div>  <!-- Container wrapper tag close -->



@endverbatim

@endsection