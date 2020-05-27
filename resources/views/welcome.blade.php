
@extends('layouts.app')

@section('content')


<div class="welcome-container"> <!-- parent tag open -->

	<div class="columns"> <!-- Coluns wrapper tag open -->

		<div class="column"> <!-- First column tag open -->

			<div class="content ">
				<p class="title is-1">
					Belle-Wise Food Delivery Service
				</p>

				<p class="subtitle">
					Get a healthy and delicious course deliver <br> to your door in a couple of click.
				</p>

				<a class="button bg-light-green is-bold has-text-white is-rounded is-medium "> Make an order </a>

			</div>

		</div>  <!-- First column tag close -->

		<div class="column"> <!-- Second column tag open -->

			<figure class="image  is-5by3">
				<img src="/images/landing_image.png">
			</figure>

		</div> <!-- Second column tag close -->

	</div>  <!-- Coluns wrapper tag close -->

</div> <!-- Parent tag close -->



@endsection