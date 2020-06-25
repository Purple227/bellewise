
@extends('layouts.app')

@section('title')
{{ "Select restaurant" }}
@endsection

@section('content')



<!-- Select Shop section -->

<div class="container"> <!-- Container tag open -->

	<p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
    <i class="fas fa-store green fa-2x"> </i> <br> 
    Select Restaurant
  </p>


<div class="box">
<div class="field has-addons has-addons-centered">
  <div class="control is-expanded">
    <input class="input is-primary" type="text" placeholder="Search Restaurant">
  </div>
  <div class="control">
    <a class="button is-primary">
      Search
    </a>
  </div>
</div>
</div>



  <div class="content" style="margin-top: 6%;" > <!-- Content tag open -->

    <p class="subtitle has-text-black  is-italic"> 
     6 Restaurants
   </p>


   <div class="columns"> <!-- Columns wrapper tag open -->

    <div class="column"> <!-- First column tag open -->

      <a href="/order">
        <div class="card"> <!-- Card tag open -->
          <div class="card-image">
            <figure class="image is-3by1">
              <img src="/images/restaurant.svg" alt="Image">
            </figure>
          </div>
          <div class="card-content">
            <!-- content goes here -->
          </div>

          <footer class="card-footer">
            <a href="/order" class="card-footer-item button is-medium is-bold is-family-monospace is-black"> Apples </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>

    </div> <!-- First column tag close -->

    <div class="column"> <!-- Second column tag open -->

      <a href="/order">
        <div class="card"> <!-- Card tag open -->
          <div class="card-image">
            <figure class="image is-3by1">
              <img src="/images/restaurant.svg" alt="Image">
            </figure>
          </div>
          <div class="card-content">
            <!-- content goes here -->
          </div>

          <footer class="card-footer">
            <a href="" class="card-footer-item button is-medium is-bold is-family-monospace is-black"> Crunchies </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>

    </div> <!-- Second column tag open -->

    

    <div class="column"> <!-- Third column tag open -->

      <a href="/order">
        <div class="card"> <!-- Card tag open -->
          <div class="card-image">
            <figure class="image is-3by1">
              <img src="/images/restaurant.svg" alt="Image">
            </figure>
          </div>
          <div class="card-content">
            <!-- content goes here -->
          </div>

          <footer class="card-footer">
            <a href="" class="card-footer-item button is-medium is-bold is-family-monospace is-black"> KFC </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>

    </div> <!-- Third column tag close -->

  </div> <!-- Columns wrapper tag close -->

  
</div>	<!-- Content tag close -->


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

</div>  <!-- Container tag close -->


@endsection