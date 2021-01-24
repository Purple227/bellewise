
@extends('layouts.app')

@section('title')
{{ "Menu" }}
@endsection

@section('content')

@verbatim

<div class="pageloader bg-orange" v-bind:class="{ 'is-active': status }"><span class="title"> Bellewise Loading</span></div>

<div class="container"> <!-- Container tag open -->

  <!-- Header section -->
  <section class="hero restaurant-hero box">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">
          {{ activeRestaurantName }} Menu
        </h1>
      </div>
    </div>
  </section>

  <!-- Sub list section of filter/search -->
  <div class="tabs is-toggle is-fullwidth">
    <ul>

      <li>
        <a class="">
          <span class="icon is-small"><i class="fas fa-fire orange" aria-hidden="true"></i></span>
          <span class="is-bold"> Most Ordered</span>
        </a>
      </li>


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
      <input class="input" type="text" placeholder="Search Food" v-model="searchQuery" v-on:keyup="searchRestaurantMenu" autofocus>
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

  <div class="columns is-multiline"> <!-- Columns wrapper tag open -->

    <div class="column is-6" v-for="(menu, index) in searchQuery.length  > 1  ? searchResult : activeMenu " :key="index"> <!-- First Column tag open -->
      <article class="message is-black">
        <div class="message-body">

          <article class="media"> <!-- Media article tag open -->
            <figure class="media-left" >
              <a href="/order/view" @click="viewMenuMethod(menu.name, menu.description, menu.price, menu.image, menu.id)">
                <p class="image is-128x128">
                  <img src="/images/default_image.svg" v-if="menu.image.length <= 'default_image.svg'.length">
                  <img :src="'https://admin.bellewisefoods.com/storage/'+menu.image" v-else>
                </p>
              </a>
            </figure>

            <div class="media-content "> <!-- Media content tag open -->
              <div class="content">
                <a href="/order/view" style="text-decoration: none;" @click="viewMenuMethod(menu.name, menu.description, menu.price, menu.image, menu.id)">
                  <p class="is-marginless">
                    <strong> {{ menu.name.substring(0,20) }}</strong> 
                    <br>
                    {{ menu.description.substring(0,38) }}
                    <br>
                    <strong class="fas fa-coins" style="color: #FF4500"> <span class="has-text-black ml-3" style="text-decoration: line-through;"> ₦{{ menu.price }} </span> <span class="has-text-black" style="margin-left: 8px;"> ₦{{ menu.price - (menu.price * activeRestaurantDiscount / 100) | money(2) }} </span> </strong>      
                  </p>
                </a>
              </div>


                <nav class="level is-mobile">

                  <div class="level-left" v-if="currentCartBasket == null ? false : currentCartBasket.some(check => check.id === menu.id)" @click="removeFromCart(menu.id)">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                    </a>
                    <a class="level-item">
                      <button class="button">
                        <span class="icon is-small">
                          <i class="fas fa-minus orange"></i>
                        </span>
                        <span class="is-bold"> Remove </span>
                      </button>
                    </a>
                  </div>

                  <div class="level-left" @click="addToCart(menu.id, menu.price - (menu.price * activeRestaurantDiscount / 100), menu.name, 1 )" v-else>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                    </a>
                    <a class="level-item">
                      <button class="button">
                        <span class="icon is-small">
                          <i class="fas fa-plus orange"></i>
                        </span>
                        <span class="is-bold"> Add </span>
                      </button>
                    </a>
                  </div>

                </nav>

            </div> <!-- Media content tag close -->


          </article> <!-- Media article tag close -->

        </div>
      </article>
    </div> <!-- First column tag close -->

  </div> <!-- Columns wrapper tag close -->



  <!-- Pagination section -->
  <div class="buttons has-addons is-centered" v-if="activeMenu.length >= 1">
    <a class="button" v-if="menuPagination.previousPageUrl" @click="restaurantActiveMenu(menuPagination.previousPageUrl)">
      <span class="icon is-small">
        <i class="fas fa-arrow-left orange"></i>
      </span>
      <span> Previous </span>
    </a>


    <a class="button">
      {{ menuPagination.to }} 0f {{ menuPagination.total }}
    </a>


    <a class="button" v-if="menuPagination.nextPageUrl" @click="restaurantActiveMenu(menuPagination.nextPageUrl)">
      <span class="icon is-small">
        <i class="fas fa-arrow-right orange"></i>
      </span>
      <span> Next </span>
    </a>
  </div>


  <div class="card" v-if="activeMenu.length <= 0">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">

        <span class="fa"> No menu found. </span>

      </div>
    </div>
  </div>

</div> <!-- Container tag open -->

@endverbatim

@include('layouts.partials.view_cart')


@endsection

