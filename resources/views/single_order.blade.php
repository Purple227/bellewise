

@extends('layouts.app')

@section('title')
{{ "Demo item" }}
@endsection

@section('content')

<div class="container"> <!-- Container tag open -->

	<div class="box">

    <div class="columns"> <!-- Columns wrapper tag open -->

      <div class="column is-5">  <!-- First column tag open -->

        <div class="content" > <!-- Content tag open -->

          <p class="subtitle has-text-black is-bold">
           FOOD NAME
         </p>

         <p class="">
           Chicken dimsum description and
           son wow i get tired lazy me damn.
           Chicken dimsum description and
           son wow i get tired lazy me damn.
         </p>

         <div class="buttons is-centered">

          <a class="button is-primary">
            <span class="icon is-small">
              <i class="fas fa-minus has-text-white"></i>
            </span>
          </a>

          <a class="button has-text-primary is-bold">
            2
          </a>


          <a class="button is-primary">
            <span class="icon is-small">
              <i class="fas fa-plus"></i>
            </span>
          </a>

        </div>

        <div class="buttons has-addons is-centered">
          <button class="button is-bold" style="text-decoration: line-through;"> N800.00 </button>
          <button class="button is-bold">750.00</button>
        </div>

        <div class="buttons has-addons is-centered">
          <button class="button is-bold"> <i class="fas fa-star" style="color: red"></i> </button>
          <button class="button is-bold"> Add To Cart</button>
        </div>


      </div> <!-- Content tag close -->

    </div>  <!-- First column tag close -->


    <div class="column">  <!-- Second column tag open -->

      <figure class="image is-2by1">
        <img src="../images/food-sample.svg" alt="Placeholder image">
      </figure>


    </div>  <!-- Second column tag close -->

  </div>  <!-- Columns wrapper tag close -->

</div>

</div>  <!-- Container tag close -->


<div class="pointer " v-if="toggleNotify" @click="toggleNotify = false"> 
  @include('layouts.partials.cart_status')
</div>
<div class="pointer " v-else> 
  @include('layouts.partials.view_cart')
</div>



@endsection