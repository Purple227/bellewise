

@extends('layouts.app')

@section('title')
@verbatim
 {{ viewMenu.name }}
 @endverbatim
@endsection

@section('content')

@verbatim

<div class="container"> <!-- Container tag open -->

	<div class="box">

    <div class="columns"> <!-- Columns wrapper tag open -->

      <div class="column is-5">  <!-- First column tag open -->

        <div class="content" > <!-- Content tag open -->

          <p class="subtitle has-text-black is-bold">
           {{ getSingleMenu.name}}
         </p>

         <p class="">
          {{ getSingleMenu.descripion }}
         </p>

         <div class="buttons is-centered">

          <a class="button bg-orange" @click="downCounter">
            <span class="icon is-small">
              <i class="fas fa-minus has-text-white"></i>
            </span>
          </a>

          <a class="button orange is-bold">
             {{ mealCounter }}
          </a>


          <a class="button bg-orange" @click="upCounter">
            <span class="icon is-small">
              <i class="fas fa-plus has-text-white"></i>
            </span>
          </a>

        </div>

        <div class="buttons has-addons is-centered">
          <button class="button is-bold" style="text-decoration: line-through;"> ₦{{ mealCounter *  getSingleMenu.price }} </button>
          <button class="button is-bold"> ₦{{ mealCounter * (getSingleMenu.price - (getSingleMenu.price * activeRestaurantDiscount / 100)) | money(2) }} </button>
        </div>

        <div class="buttons has-addons is-centered" @click="removeFromCart(getSingleMenu.id)" v-if=" currentCartBasket == null ? false : currentCartBasket.some(check => check.id === getSingleMenu.ID)">
          <button class="button is-bold"> <i class="fas fa-star" style="color: red"></i> </button>
          <button class="button is-bold"> Remove From Cart</button>
        </div>

        <div class="buttons has-addons is-centered" @click="addToCart(getSingleMenu.ID, mealCounter * (getSingleMenu.price - (getSingleMenu.price * activeRestaurantDiscount / 100)), getSingleMenu.name, mealCounter )" v-else>
          <button class="button is-bold"> <i class="fas fa-star" style="color: red"></i> </button>
          <button class="button is-bold"> Add To Cart</button>
        </div>

      </div> <!-- Content tag close -->

    </div>  <!-- First column tag close -->


    <div class="column">  <!-- Second column tag open -->

      <figure class="image is-2by1">
        <img :src="'https://admin.bellewisefoods.com/storage/'+getSingleMenu.image" alt="Placeholder image">
      </figure>


    </div>  <!-- Second column tag close -->

  </div>  <!-- Columns wrapper tag close -->

</div>

</div>  <!-- Container tag close -->


@endverbatim

{{--
<div class="pointer " v-if="toggleNotify" @click="toggleNotify = false"> 
  @include('layouts.partials.cart_status')
</div>
--}}

<div class="pointer"> 
  @include('layouts.partials.view_cart')
</div>



@endsection