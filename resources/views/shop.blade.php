
@extends('layouts.app')

@section('title')
{{ "Restaurants" }}
@endsection

@section('content')


<div class="pageloader bg-orange" v-bind:class="{ 'is-active': status }"><span class="title"> Bellewise Loading</span></div>

<div class="container"> <!-- Container tag open -->

    @verbatim


  <!-- Header section -->
  <section class="hero restaurant-hero box">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">
          Restaurants
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
      <input class="input" type="text" placeholder="Search Restaurant" v-model="searchQuery" v-on:keyup="searchRestaurant" autofocus>
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




  <p class="is-bold is-italic"> Open Restaurants</p>
  <br>

  <div class="columns is-multiline"> <!-- Columns wrapper tag open -->

    <div class="column is-6" v-for="(activeRestaurants, index) in searchQuery.length  > 1  ? searchResult : activeRestaurant " :key="index"> <!-- First Column tag open -->
      <article class="message is-black">
        <div class="message-body">

          <article class="media"> <!-- Media article tag open -->
            <figure class="media-left" >
              <a href="/order" @click="restaurantActiveMenu(activeRestaurants.name, activeRestaurants.id)">
                <p class="image is-128x128">
                  <img src="/images/default_image.svg" v-if="activeRestaurants.image.length <= 'default_image.svg'.length">
                  <img :src="'https://admin.bellewisefoods.com/storage/'+activeRestaurants.image" v-else>
                </p>
              </a>
            </figure>
            <div class="media-content "> <!-- Media content tag open -->
              <a href="/order" style="text-decoration: none;" @click="restaurantActiveMenu(activeRestaurants.name, activeRestaurants.id, activeRestaurants.discount)">
                <div class="content">
                  <p class="is-marginless">
                    <strong> {{ activeRestaurants.name.substring(0,20) }} </strong> <small> Updated </small> <small> {{ activeRestaurants.updated_at | format('D MMM YYYY') }} </small>
                    <div class="tags are-small is-marginless">
                      <!--span class="tag is-black"> tags </span-->
                      <!--span class="tag is-black"> tags </span-->
                    </div>
                    <strong class="fas fa-tag is-bold" style="color: #FF4500"> <span class="has-text-black"> {{ activeRestaurants.discount }} % Off</span> </strong> 
                  </p>
                </div>
              </a>
            </div> <!-- Media content tag close -->

            <div class="media-right">
            </div>

          </article> <!-- Media article tag close -->

        </div>
      </article>
    </div> <!-- First column tag close -->

  </div> <!-- Columns wrapper tag close -->


  <!-- Pagination section -->
  <div class="buttons has-addons is-centered" v-if="activeRestaurant.length >= 1">
    <a class="button" v-if="restaurantPagination.previousPageUrl" @click="activeRestaurantData(restaurantPagination.previousPageUrl)">
      <span class="icon is-small">
        <i class="fas fa-arrow-left orange"></i>
      </span>
      <span> Previous </span>
    </a>


    <a class="button">
      {{ restaurantPagination.to}} 0f {{restaurantPagination.total}}
    </a>


    <a class="button" v-if="restaurantPagination.nextPageUrl" @click="activeRestaurantData(restaurantPagination.nextPageUrl)">
      <span class="icon is-small">
        <i class="fas fa-arrow-right orange"></i>
      </span>
      <span> Next </span>
    </a>
  </div>



<div class="card" v-if="activeRestaurant.length <= 0">
  <div class="card-content">
    <div class="content is-bold has-text-centered subtitle">

  <span class="fa"> No restaurant found. </span>

    </div>
  </div>
</div>

@endverbatim


<!--  section -->
<div class="" v-if="restaurantID"> 
@include("modals.restaurant_check")
</div>

</div> <!-- Container tag open -->




@endsection