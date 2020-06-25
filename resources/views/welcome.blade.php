
@extends('layouts.app')

@section('title')
{{ "BelleWise" }}
@endsection

@section('content')


<div class="welcome-container "> <!-- parent tag open -->

	<div class="columns"> <!-- Coluns wrapper tag open -->

		<div class="column"> <!-- First column tag open -->

			<div class="content animate__animated animate__backInLeft animate__fast">
				<p class="title is-1 is-family-monospace">
					Bellewise Food Delivery Service
				</p>

				<p class="subtitle fa">
					Get a healthy and delicious course deliver <br> to your door in a couple of click.
				</p>

				<a href="/shop" class="button is-black is-bold has-text-white is-rounded is-medium "> Order Food Now </a>

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

	@include('layouts.partials.order_action')


</div> <!-- Parent tag close -->



@endsection