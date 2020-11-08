
@extends('layouts.app')

@section('title')
{{ "Favourite" }}
@endsection

@section('content')


<div class="container"> <!-- Container tag open -->

  <!-- Header section -->
  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   <i class="fas fa-list green fa-2x"> </i> <br> 
   Favourite List
 </p>



<!-- Search input section -->
<div class="field has-addons has-addons-centered">
  <div class="control has-icons-left is-expanded">
    <input class="input is-primary" type="text" placeholder="Search Favourite Food" autofocus>
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

<div class="columns is-multiline"> <!-- Columns wrapper tag open -->

  <div class="column is-6"> <!-- First Column tag open -->
    <article class="message is-black">
      <div class="message-body">

        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order/demo">
              <p class="image is-128x128">
                <img src="/images/food-sample.svg">
              </p>
            </a>
          </figure>

          <div class="media-content "> <!-- Media content tag open -->
            <div class="content">
              <a href="/order/demo" style="text-decoration: none;">
                <p class="is-marginless">
                  <strong> Food Name </strong> 
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adip.
                  <br>
                  <strong class="fas fa-coins has-text-primary"> <span class="has-text-black" style="text-decoration: line-through;"> N800.00 </span> <span class="has-text-black" style="margin-left: 8px;"s> N750.00 </span> </strong>      
                </p>
              </a>
            </div>

            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                </a>
                <a class="level-item">
                  <button class="button">
                    <span class="icon is-small">
                      <i class="fas fa-plus has-text-primary"></i>
                    </span>
                    <span class="is-bold">Add</span>
                  </button>
                </a>
              </div>
            </nav>

          </div> <!-- Media content tag close -->


        </article> <!-- Media article tag close -->

      </div>
    </article>
  </div> <!-- First column tag close -->

  <div class="column is-6"> <!-- Second Column tag open -->
    <article class="message is-black">
      <div class="message-body">

        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order/demo">
              <p class="image is-128x128">
                <img src="/images/food-sample.svg">
              </p>
            </a>
          </figure>

          <div class="media-content "> <!-- Media content tag open -->
            <div class="content">
              <a href="/order/demo" style="text-decoration: none;">
                <p class="is-marginless">
                  <strong> Food Name </strong> 
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adip.
                  <br>
                  <strong class="fas fa-coins has-text-primary"> <span class="has-text-black" style="text-decoration: line-through;"> N800.00 </span> <span class="has-text-black" style="margin-left: 8px;"s> N750.00 </span> </strong>      
                </p>
              </a>
            </div>

            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                </a>
                <a class="level-item">
                  <button class="button">
                    <span class="icon is-small">
                      <i class="fas fa-plus has-text-primary"></i>
                    </span>
                    <span class="is-bold">Add</span>
                  </button>
                </a>
              </div>
            </nav>

          </div> <!-- Media content tag close -->


        </article> <!-- Media article tag close -->


      </div>
    </article>
  </div> <!-- Second column tag close -->


  <div class="column is-6"> <!-- Third Column tag open -->
    <article class="message is-black">
      <div class="message-body">


        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order/demo">
              <p class="image is-128x128">
                <img src="/images/food-sample.svg">
              </p>
            </a>
          </figure>

          <div class="media-content "> <!-- Media content tag open -->
            <div class="content">
              <a href="/order/demo" style="text-decoration: none;">
                <p class="is-marginless">
                  <strong> Food Name </strong> 
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adip.
                  <br>
                  <strong class="fas fa-coins has-text-primary"> <span class="has-text-black" style="text-decoration: line-through;"> N800.00 </span> <span class="has-text-black" style="margin-left: 8px;"s> N750.00 </span> </strong>      
                </p>
              </a>
            </div>

            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                </a>
                <a class="level-item">
                  <button class="button">
                    <span class="icon is-small">
                      <i class="fas fa-plus has-text-primary"></i>
                    </span>
                    <span class="is-bold">Add</span>
                  </button>
                </a>
              </div>
            </nav>

          </div> <!-- Media content tag close -->


        </article> <!-- Media article tag close -->


      </div>
    </article>
  </div> <!-- Third column tag close -->


    <div class="column is-6"> <!-- Fourth Column tag open -->
    <article class="message is-black">
      <div class="message-body">


        <article class="media"> <!-- Media article tag open -->
          <figure class="media-left" >
            <a href="/order/demo">
              <p class="image is-128x128">
                <img src="/images/food-sample.svg">
              </p>
            </a>
          </figure>

          <div class="media-content "> <!-- Media content tag open -->
            <div class="content">
              <a href="/order/demo" style="text-decoration: none;">
                <p class="is-marginless">
                  <strong> Food Name </strong> 
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adip.
                  <br>
                  <strong class="fas fa-coins has-text-primary"> <span class="has-text-black" style="text-decoration: line-through;"> N800.00 </span> <span class="has-text-black" style="margin-left: 8px;"s> N750.00 </span> </strong>      
                </p>
              </a>
            </div>

            <nav class="level is-mobile">
              <div class="level-left">
                <a class="level-item">
                  <span class="icon is-small"><i class="fas fa-star" style="color: red;"></i></span>
                </a>
                <a class="level-item">
                  <button class="button">
                    <span class="icon is-small">
                      <i class="fas fa-plus has-text-primary"></i>
                    </span>
                    <span class="is-bold">Add</span>
                  </button>
                </a>
              </div>
            </nav>

          </div> <!-- Media content tag close -->


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


@include('layouts.partials.view_cart')



</div> <!-- Container tag open -->


@endsection