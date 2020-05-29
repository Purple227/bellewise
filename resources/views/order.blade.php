
@extends('layouts.app')

@section('content')

    @include('layouts.partials.store')

<!-- Order section start here -->

<div class="container" v-if="selectStore"> <!-- Container tag open -->

  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   <i class="fas fa-store green fa-2x"> </i> <br> 
   Dash Restaurant
  </p>




<div class="content" style="margin-top: 6%;" > <!-- Content tag open -->

<div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column"> <!-- First column tag open -->

<div class="card" style="cursor: pointer;"> <!-- Card tag open -->

  <header class="card-header">
    <p class="card-header-title is-centered is-family-monospace">
      Chicken Dimsum
    </p>
  </header>


  <div class="card-image">
    <figure class="image   is-2by1">
      <img src="/images/chicken.png" alt="Image">
    </figure>
  </div>

  <div class="card-content">
    <div class="content fa">
      A description about the food and blah blah blah blah blah blah blah.
    </div>
  </div>

  <footer class="card-footer">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

  </footer>

</div> <!-- Card tag close -->

  </div> <!-- First column tag close -->

  <div class="column"> <!-- Second column tag open -->


<div class="card" style="cursor: pointer;"> <!-- Card tag open -->

  <header class="card-header">
    <p class="card-header-title is-centered is-family-monospace">
      Chicken Dimsum
    </p>
  </header>


  <div class="card-image">
    <figure class="image   is-2by1">
      <img src="/images/chicken.png" alt="Image">
    </figure>
  </div>

  <div class="card-content">
    <div class="content fa">
      A description about the food and blah blah blah blah blah blah blah.
    </div>
  </div>

  <footer class="card-footer">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

  </footer>

</div> <!-- Card tag close -->




  </div> <!-- Second column tag open -->

  <div class="column"> <!-- Third column tag open -->


<div class="card" style="cursor: pointer;"> <!-- Card tag open -->

  <header class="card-header">
    <p class="card-header-title is-centered is-family-monospace">
      Chicken Dimsum
    </p>
  </header>


  <div class="card-image">
    <figure class="image   is-2by1">
      <img src="/images/chicken.png" alt="Image">
    </figure>
  </div>

  <div class="card-content">
    <div class="content fa">
      A description about the food and blah blah blah blah blah blah blah.
    </div>
  </div>

  <footer class="card-footer">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

  </footer>

</div> <!-- Card tag close -->


  </div> <!-- Third column tag close -->

</div> <!-- Columns wrapper tag close -->

  
</div>  <!-- Content tag close -->


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

