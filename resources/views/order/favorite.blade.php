
@extends('layouts.app')

@section('title')
{{ "Favorite" }}
@endsection

@section('content')


@extends('layouts.app')

@section('title')
{{ "Order" }}
@endsection

@section('content')

<!-- Order section start here -->

<div class="container"> <!-- Container tag open -->

  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   <i class="fas fa-heart green fa-2x"> </i> <br> 
   Favorite Foods
 </p>


<div class="content" style="margin-top: 6%;" > <!-- Content tag open -->

  <div class="columns"> <!-- Columns wrapper tag open -->

    <div class="column"> <!-- First column tag open -->

        <div class="card"> <!-- Card tag open -->
<a href="/order/demo">
          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image" style="margin-top: 5px">
            <figure class="image is-3by1">
              <img src="/images/food-sample.svg" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
              <br>
              <p class="fa has-text-primary is-bold"> By dash restaurant</p>
            </div>
          </div>

        </a>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-black is-medium is-bold is-family-monospace"> N750.00  </a>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-plus fa-border has-text-primary"></i> </p>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-star has-text-danger"> </i>  </p>

          </footer>

        </div> <!-- Card tag close -->


    </div> <!-- First column tag close -->

    <div class="column"> <!-- Second column tag open -->

        <div class="card"> <!-- Card tag open -->
<a href="/order/demo">
          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image" style="margin-top: 5px">
            <figure class="image is-3by1">
              <img src="/images/food-sample.svg" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
              <br>
              <p class="fa has-text-primary is-bold"> By dash restaurant</p>
            </div>
          </div>

        </a>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-black is-medium is-bold is-family-monospace"> N750.00  </a>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-plus fa-border has-text-primary"></i> </p>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-star has-text-danger"> </i>  </p>

          </footer>

        </div> <!-- Card tag close -->


    </div> <!-- Second column tag open -->

    <div class="column"> <!-- Third column tag open -->

        <div class="card"> <!-- Card tag open -->
<a href="/order/demo">
          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image" style="margin-top: 5px">
            <figure class="image is-3by1">
              <img src="/images/food-sample.svg" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
              <br>
              <p class="fa has-text-primary is-bold"> By dash restaurant</p>
            </div>
          </div>

        </a>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-black is-medium is-bold is-family-monospace"> N750.00  </a>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-plus fa-border has-text-primary"></i> </p>

            <p class="card-footer-item button is-black is-medium is-bold is-family-monospace"> <i class="fas fa-star has-text-danger"> </i>  </p>

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



@endsection
