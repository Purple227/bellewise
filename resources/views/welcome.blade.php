
@extends('layouts.app')

@section('title')

{{ "BelleWise" }}

@endsection

@section('content')


<div class="welcome-container"> <!-- parent tag open -->


	<div class="columns"> <!-- Coluns wrapper tag open -->

		<div class="column"> <!-- First column tag open -->

			<div class="content animate__animated animate__backInLeft animate__slow">


          <p class="title is-bold is-size-2-desktop has-text-justified is-size-4-mobile">
            Bellewise Foods 
            <br>
            Delivery Service 
          </p>


        <p class="is-italic is-mobile is-bold">
         Your No.1 Simplified Food Plug. 
         Get your favourite meals from your favourite spot delivered to you with just a few clicks.
         Fast and efficient.
       </p>

       <a href="/shop" class="button is-black is-bold is-medium is-fullwidth"> Order Food Now </a>

     </div>

   </div>  <!-- First column tag close -->

   <div class="column"> <!-- Second column tag open -->

     <div class="content animate__animated animate__backInRight animate__slow">

       <figure class="image  is-5by3-desktop">
        <img class="is-rounded" src="/images/food.svg">
      </figure>

    </div>

  </div> <!-- Second column tag close -->

</div>  <!-- Coluns wrapper tag close -->



<hr>


<div class="columns is-mobile">
  <div class="column is-three-fifths-desktop is-offset-one-fifth-desktop box">


    <div class="columns is-gapless is-marginless is-paddingless"> <!-- Columns wrapper tag open -->


       <div class="column"> <!-- First column tag open -->
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="/images/mobile.svg" alt="Placeholder image">
          </figure>
        </div>
      </div> <!-- First column tag close -->

      <div class="column"> <!-- Second column tag open -->

        <div class="has-text-centered center"> <!-- Content tag open -->

          <p class="is-bold subtitle"> Save time and energy</p>

          Download the app and sit back,
          <br>
          We'll handle the rest.

          <br>
          <br>

          <div class="buttons is-centered">
            <button class="button is-bold is-black"> Google Play </button>
            <button class="button is-bold is-black"> App Store </button>
          </div>

        </div> <!-- Content tag close -->

      </div> <!-- Second column tag close -->


  </div> <!-- Columns wrapper tag close -->


</div>
</div>





<div class="columns is-multiline"> <!-- Columns warpper tag open -->

  <div class="column is-6"> <!-- First column tag open -->

    <div class="box" style="padding: 45px;">
      <p class="is-bold has-text-black has-text-centered "> 
       <i class="fas fa-utensils orange fa-6x"> </i> <br> 
       Wide variety
       <br>
       of foods.
     </p>
   </div>

 </div> <!-- First column tag close -->

 <div class="column is-6"> <!-- Third column tag open -->

  <div class="box" style="padding: 45px;">
    <p class="is-bold has-text-black has-text-centered "> 
     <i class="fas fa-star orange fa-6x"> </i> <br> 
     Re-order easy and fast
     <br>
     through your favorite.
   </p>
 </div>

</div> <!-- Third column tag close -->

<div class="column is-6"> <!-- Fourth column tag open -->

  <div class="box" style="padding: 45px;">
    <p class="is-bold has-text-black has-text-centered "> 
     <i class="fas fa-bolt orange fa-6x"> </i> <br> 
     Delivery in minutes
     <br>
     depending on your location
   </p>
 </div>

</div> <!-- Fourth column tag close -->

<div class="column is-6"> <!-- Fifth column tag open -->

  <div class="box" style="padding: 45px;">
    <p class="is-bold has-text-black has-text-centered "> 
     <i class="fas fa-credit-card orange fa-6x"> </i> <br> 
     Pay by cash or
     <br>
     credit card.
   </p>
 </div>

</div> <!-- Fifth column tag close -->

<div class="column"> <!-- Sixth column tag open -->

  <div class="box" style="padding: 45px;">
    <p class="is-bold has-text-black has-text-centered "> 
     <i class="fas fa-history orange fa-6x"> </i> <br> 
     Scheduled
     <br>
     delivery
   </p>
 </div>

</div> <!-- Sixth column tag close -->

</div> <!-- Columns warpper tag close -->

<p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
 Try it out today
 <br>
 <a href="/shop" class="button bg-orange has-text-white is-bold"> Order Food Now</a>
</p>


</div> <!-- Parent tag close -->



@endsection