
@extends('layouts.app')

@section('title')
{{ "BelleWise" }}
@endsection

@section('content')


<div class="welcome-container "> <!-- parent tag open -->


	<div class="columns"> <!-- Coluns wrapper tag open -->

		<div class="column"> <!-- First column tag open -->

			<div class="content animate__animated animate__backInLeft animate__fast">
				<p class="is-size-4-mobile is-size-1-desktop is-bold is-family-monospace">
					 Bellewise Foods 
					<br>
					 Delivery Service 
				</p>


				<p class="is-italic is-mobile is-bold">
					Your No.1 Simplified Food Plug. 
					<br>
					Get your favourite meals from your favourite spot delivered to you with just a few clicks.
					<br>
					 Fast and efficient.
				</p>

			</div>

		</div>  <!-- First column tag close -->

		<div class="column"> <!-- Second column tag open -->

			<div class="content animate__animated animate__backInRight animate__fast">

			<figure class="image  is-5by3">
				<img class="is-rounded" src="/images/food.png">
			</figure>

		</div>

		</div> <!-- Second column tag close -->

	</div>  <!-- Coluns wrapper tag close -->



<hr>


<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">


<div class="columns is-gapless is-marginless is-paddingless"> <!-- Columns wrapper tag open -->

	<div class="column"> <!-- First column tag open -->
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="/images/mobile.svg" alt="Placeholder image">
    </figure>
  </div>
	</div> <!-- First column tag close -->

	<div class="column"> <!-- Second column tag open -->

<div class="content has-text-centered center"> <!-- Content tag open -->

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
   <i class="fas fa-utensils has-text-primary fa-6x"> </i> <br> 
   Wide variety
   <br>
    of foods.
 </p>
</div>

</div> <!-- First column tag close -->

<div class="column is-6"> <!-- Second column tag open -->

<div class="box" style="padding: 45px;">
  <p class="is-bold has-text-black has-text-centered "> 
   <i class="fas fa-hand-pointer has-text-primary fa-6x"> </i> <br> 
   Easy to use, order
   <br>
    within 3 clicks.
 </p>
</div>

</div> <!-- Second column tag close -->

<div class="column is-6"> <!-- Third column tag open -->

<div class="box" style="padding: 45px;">
  <p class="is-bold has-text-black has-text-centered "> 
   <i class="fas fa-star has-text-primary fa-6x"> </i> <br> 
   Re-order easy and fast
   <br>
    through your favorite.
 </p>
</div>

</div> <!-- Third column tag close -->

<div class="column is-6"> <!-- Fourth column tag open -->

<div class="box" style="padding: 45px;">
  <p class="is-bold has-text-black has-text-centered "> 
   <i class="fas fa-bolt has-text-primary fa-6x"> </i> <br> 
   Delivery in about 30 to 60 minutes
   <br>
   depending on your location
 </p>
</div>

</div> <!-- Fourth column tag close -->

<div class="column is-6"> <!-- Fifth column tag open -->

<div class="box" style="padding: 45px;">
  <p class="is-bold has-text-black has-text-centered "> 
   <i class="fas fa-credit-card has-text-primary fa-6x"> </i> <br> 
   Pay by cash or
   <br>
    credit card.
 </p>
</div>

</div> <!-- Fifth column tag close -->

<div class="column is-6"> <!-- Sixth column tag open -->

<div class="box" style="padding: 45px;">
  <p class="is-bold has-text-black has-text-centered "> 
   <i class="fas fa-history has-text-primary fa-6x"> </i> <br> 
   Scheduled
   <br>
   delivery
 </p>
</div>

</div> <!-- Sixth column tag close -->

</div> <!-- Columns warpper tag close -->

  <p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
   Try it out today
   <button class="button is-primary is-bold"> Order Food Now</button>
 </p>










	@include('layouts.partials.order_action')

</div> <!-- Parent tag close -->



@endsection