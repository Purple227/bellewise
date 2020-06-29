
@extends('layouts.app')

@section('title')
{{ "Restaurants" }}
@endsection

@section('content')


<div class="container"> <!-- Container tag open -->

  <!-- Header section -->
  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   <i class="fas fa-store green fa-2x"> </i> <br> 
   Ordering From Dash Restaurant
 </p>


 <!-- Sub list section of filter/search -->
 <div class="tabs is-toggle is-fullwidth">
  <ul>
    <li>
      <a class="">
        <span class="icon is-small"><i class="fas fa-filter has-text-primary" aria-hidden="true"></i></span>

            <span class="is-bold">Filter</span>
            <span class="icon is-small">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>

        </span>
      </a>
    </li>



    <li @click="search = !search">
      <a>
        <span class="icon is-small"><i class="fas fa-search has-text-primary" aria-hidden="true"></i></span>
        <span class="is-bold">Search</span>
      </a>
    </li>

  </ul>
</div>





<!-- Search input section -->
<div class="field has-addons has-addons-centered" v-if=search>
  <div class="control has-icons-left is-expanded">
    <input class="input is-primary" type="text" placeholder="Search Restaurant" autofocus>
    <span class="icon is-small is-left">
      <i class="fas fa-search has-text-primary"></i>
    </span>
  </div>
  <div class="control">
    <a class="button is-primary">
      Search
    </a>
  </div>
</div>




<p class="is-bold is-italic"> 6 Restaurants open</p>
<br>

<div class="columns is-multiline"> <!-- Columns wrapper tag open -->

  <div class="column is-6"> <!-- First Column tag open -->
    <article class="message is-black">
      <div class="message-body">

        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order">
            <p class="image is-128x128">
              <img src="/images/restaurant.svg">
            </p>
          </a>
          </figure>
          <div class="media-content "> <!-- Media content tag open -->
            <a href="/order" style="text-decoration: none;">
            <div class="content">
              <p class="is-marginless">
                <strong> Restaurant Name </strong> <small> Updated</small> <small>31min ago</small>
                <div class="tags are-small is-marginless">
                  <span class="tag is-primary">Salad</span>
                  <span class="tag is-primary">Soups</span>
                </div>
                <strong class="fas fa-tag is-bold has-text-primary"> <span class="has-text-black"> 35% Off </span> </strong> 
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

  <div class="column is-6"> <!-- Second Column tag open -->
    <article class="message is-black">
      <div class="message-body">

        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order">
            <p class="image is-128x128">
              <img src="/images/restaurant.svg">
            </p>
          </a>
          </figure>
          <div class="media-content "> <!-- Media content tag open -->
            <a href="/order" style="text-decoration: none;">
            <div class="content">
              <p class="is-marginless">
                <strong> Restaurant Name </strong> <small> Updated</small> <small>31min ago</small>
                <div class="tags are-small is-marginless">
                  <span class="tag is-primary">Salad</span>
                  <span class="tag is-primary">Soups</span>
                </div>
                <strong class="fas fa-tag is-bold has-text-primary"> <span class="has-text-black"> 35% Off </span> </strong> 
              </p>
            </div>
          </a>
          </div> <!-- Media content tag close -->

          <div class="media-right">
          </div>

        </article> <!-- Media article tag close -->

      </div>
    </article>
  </div> <!-- Second column tag close -->


  <div class="column is-6"> <!-- Third Column tag open -->
    <article class="message is-black">
      <div class="message-body">
        
        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order">
            <p class="image is-128x128">
              <img src="/images/restaurant.svg">
            </p>
          </a>
          </figure>
          <div class="media-content "> <!-- Media content tag open -->
            <a href="/order" style="text-decoration: none;">
            <div class="content">
              <p class="is-marginless">
                <strong> Restaurant Name </strong> <small> Updated</small> <small>31min ago</small>
                <div class="tags are-small is-marginless">
                  <span class="tag is-primary">Salad</span>
                  <span class="tag is-primary">Soups</span>
                </div>
                <strong class="fas fa-tag is-bold has-text-primary"> <span class="has-text-black"> 35% Off </span> </strong> 
              </p>
            </div>
          </a>
          </div> <!-- Media content tag close -->

          <div class="media-right">
          </div>

        </article> <!-- Media article tag close -->

      </div>
    </article>
  </div> <!-- Third column tag close -->

  <div class="column is-6"> <!-- Fourth Column tag open -->
    <article class="message is-black">
      <div class="message-body">

        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order">
            <p class="image is-128x128">
              <img src="/images/restaurant.svg">
            </p>
          </a>
          </figure>
          <div class="media-content "> <!-- Media content tag open -->
            <a href="/order" style="text-decoration: none;">
            <div class="content">
              <p class="is-marginless">
                <strong> Restaurant Name </strong> <small> Updated</small> <small>31min ago</small>
                <div class="tags are-small is-marginless">
                  <span class="tag is-primary">Salad</span>
                  <span class="tag is-primary">Soups</span>
                </div>
                <strong class="fas fa-tag is-bold has-text-primary"> <span class="has-text-black"> 35% Off </span> </strong> 
              </p>
            </div>
          </a>
          </div> <!-- Media content tag close -->

          <div class="media-right">
          </div>

        </article> <!-- Media article tag close -->

      </div>
    </article>
  </div> <!-- Fourth column tag close -->

</div> <!-- Columns wrapper tag close -->


<!-- Pagination section -->

<div class="buttons has-addons is-centered">
  <a class="button">
    <span class="icon is-small">
      <i class="fas fa-arrow-left green"></i>
    </span>
    <span> Previous </span>
  </a>


  <a class="button">

    3 0f 6
  </a>


  <a class="button">
    <span class="icon is-small">
      <i class="fas fa-arrow-right green"></i>
    </span>
    <span> Next </span>
  </a>

</div>





</div> <!-- Container tag open -->


@endsection