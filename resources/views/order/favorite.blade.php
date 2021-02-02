
@extends('layouts.app')

@section('title')
{{ "Favourite" }}
@endsection

@section('content')


<div class="container"> <!-- Container tag open -->

  <!-- Header section -->
  <section class="hero restaurant-hero box">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white">
          My Favorites
        </h1>
      </div>
    </div>
  </section>

  <div class="card">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">

        <span class="fa"> Coming soon. </span>

      </div>
    </div>
  </div>





@include('layouts.partials.view_cart')



</div> <!-- Container tag open -->


@endsection