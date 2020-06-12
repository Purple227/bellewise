
@extends('layouts.app')

@section('title')
{{ "Order" }}
@endsection

@section('content')

<!-- Order section start here -->

<div class="container"> <!-- Container tag open -->

  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   <i class="fas fa-store green fa-2x"> </i> <br> 
   Dash Restaurant
 </p>

 <div class="tabs is-inline-block">
  <ul>
    <li class="is-active"><a class="has-text-primary">Most Selling</a></li>
    <li><a class="has-text-primary">Best Combos</a></li>
    <li><a class="has-text-primary">Suggestion</a></li>
  </ul>
</div>



<div class="content" style="margin-top: 6%;" > <!-- Content tag open -->

  <div class="columns"> <!-- Columns wrapper tag open -->

    <div class="column"> <!-- First column tag open -->

      <a href="/order/demo">
        <div class="card"> <!-- Card tag open -->

          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image">
            <figure class="image   is-2by1">
              <img src="/images/food.png" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
            </div>
          </div>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>

    </div> <!-- First column tag close -->

    <div class="column"> <!-- Second column tag open -->

      <a href="/order/demo">
        <div class="card"> <!-- Card tag open -->

          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image">
            <figure class="image   is-2by1">
              <img src="/images/food.png" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
            </div>
          </div>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>




    </div> <!-- Second column tag open -->

    <div class="column"> <!-- Third column tag open -->

      <a href="/order/demo">
        <div class="card"> <!-- Card tag open -->

          <header class="card-header">
            <p class="card-header-title is-centered is-family-monospace">
              FOOD NAME
            </p>
          </header>


          <div class="card-image">
            <figure class="image   is-2by1">
              <img src="/images/food.png" alt="Image">
            </figure>
          </div>

          <div class="card-content">
            <div class="content has-text-black">
              A description about the food and blah blah blah blah blah blah blah.
            </div>
          </div>

          <footer class="card-footer">
            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> N750.00  </a>

            <a href="/order/demo" class="card-footer-item button is-medium is-bold is-family-monospace"> Order  </a>

          </footer>

        </div> <!-- Card tag close -->
      </a>


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

@include('layouts.partials.view_cart')


</div>  <!-- Container tag close -->



@endsection

