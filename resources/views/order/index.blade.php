
@extends('layouts.app')

@section('content')

<div class="pageloader bg-orange" v-bind:class="{ 'is-active': status }"><span class="title"> Bellewise Loading</span></div>

<div class="container"> <!-- Container tag open -->

  @verbatim

  <!-- Header section -->
  <section class="hero restaurant-hero box">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">
          My Orders
        </h1>
      </div>
    </div>
  </section>



  <div class="card"> <!-- Card tag open -->

    <div class="card-content table-container"> <!-- Card content tag open -->

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




      <table class="table is-bordered is-striped is-hoverable"> <!-- Table tag open -->

        <thead>
          <tr>
            <th> <span class="orange"> ID </span> </th>
            <th> <span class="orange"> Cart </span> </th>
            <th> <span class="orange"> Status </span> </th>
            <th> <span class="orange"> Payment Status </span> </th>
            <th> <span class="orange"> Delivery Time </span> </th>
            <th> <span class="orange"> Total Price </span> </th>
            <th> <span class="orange"> Price Summary </span> </th>
            <th> <span class="orange"> phone </span> </th>
            <th> <span class="orange"> Address  </span> </th>
            <th> <span class="orange"> Name  </span> </th>
          </tr>
        </thead>

        <tbody>

          <tr v-for="(order, index) in searchQuery.length  > 1  ? searchResult : orderHistory " :key="index">
            <th> <span class="purple-color">  {{ order.order_id}}  </span> </th>
            <td> {{ order.tags.length }} </td>
            <td>  <span class="tag is-bold is-medium">  {{ order.order_status }}  </span> </td>
            <td> {{ order.payment }} </td>
            <td> {{ order.delivery_time == null ? 'Now' : order.delivery_time }} </td>
            <td> {{ order.price | money(2) }} </td>
            <td> {{ order.price_summary | money(2) }} </td>
            <td> {{ order.phone }} </td>
            <td> {{ order.address.substring(0,10) }} </td>
            <td> {{ order.name.substring(0,6) }} </td>
          </tr>

        </tbody>

      </table> <!-- Table tag close -->


      <!-- Pagination section -->
      <div class="buttons has-addons is-centered" v-if="orderHistory.length >= 1">
        <a class="button" v-if="orderPage.previousPageUrl" @click="getOrderHistory(orderPage.previousPageUrl)">
          <span class="icon is-small">
            <i class="fas fa-arrow-left orange"></i>
          </span>
          <span> Previous </span>
        </a>


        <a class="button">

          {{ orderPage.to}} 0f {{ orderPage.total }}
        </a>


        <a class="button" v-if="orderPage.nextPageUrl" @click="getOrderHistory(orderPage.nextPageUrl)">
          <span class="icon is-small">
            <i class="fas fa-arrow-right purple-color"></i>
          </span>
          <span> Next </span>
        </a>
      </div>


    </div> <!-- Card content tag open -->


  </div> <!-- Card tag close -->


  <div class="card" v-if="orderHistory.length <= 0">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">

        <span class="fa"> No order found. Place an order. </span>

      </div>
    </div>
  </div>



  @endverbatim


  {{--	@include('order.active_order') --}}

  {{--	@include('layouts.partials.order_action') --}}

</div> <!-- Container tag close -->

@endsection