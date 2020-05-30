
@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->

<div class="box">


	<div class="columns"> <!-- Columns wrapper tag open -->

		<div class="column is-9"> <!-- First column tag open -->

			<div class="content iframe-container">

				<iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.7224011754424!2d8.34146551447402!3d4.98571994050913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1067876bfab198c5%3A0x8f69a9455294eada!2sApples%20Fried%20Chicken%20Ltd!5e0!3m2!1sen!2sng!4v1590710760362!5m2!1sen!2sng"></iframe>
			</div>


		</div>  <!-- First column tag close -->


		<div class="column is-3"> <!-- Second column tag open -->


			<div class="box"> <!-- Content tag open -->

				<p class="subtitle is-bold fa has-text-black">
					CONNECT
				</p>

				<br>

				<span class="icon green is-medium">
					<i class="fab fa-facebook-f fa-lg"></i>
				</span>
				<span class="icon green is-medium" style="margin-left: 28px;">
					<i class="fab fa-twitter fa-lg"></i>
				</span>
				<span class="icon green is-medium" style="margin-left: 28px;">
					<i class="fab fa-instagram fa-lg"></i>
				</span>

			</div>  <!-- Content tag close -->


			<hr>


			<div class="box"> <!-- Content tag open -->

				<p class="subtitle is-bold fa has-text-black">
					SEND A MESSAGE
				</p>

				<div class="field">
					<div class="control has-icons-left has-icons-right">
						<input class="input is-primary" type="Email" placeholder="Email">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope green"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle green"></i>
						</span>
					</div>
				</div>

				<div class="field">
					<div class="control has-icons-right has-icons-left">
						<input class="input is-primary" type="text" placeholder="Subject">
						<span class="icon is-small is-left">
							<i class="fas fa-heading green"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle green"></i>
						</span>
					</div>
				</div>


				<div class="field">
					<div class="control">
						<textarea class="textarea is-primary" placeholder="Message"></textarea>
					</div>
				</div>

				<div class="field">
					<div class="control">
						<button class="button is-primary">SEND</button>
					</div>
				</div>

			</div>  <!-- Content tag close -->


			<hr>


			<div class="box"> <!-- Content tag open -->
				<p class="subtitle is-bold fa has-text-black">
					OTHER WAY
				</p>


				<p class="is-bold is-marginless">
					<i class="fas fa-envelope green"> <span class="has-text-black"> belle-wise@gmail.com </span> </i>
					<p class="is-bold has-text-black">
						<i class="fas fa-phone green"> <span class="has-text-black"> +234XXXXXXXXXX </span> </i>
					</p>
				</p>


			</div>  <!-- Content tag close -->


		</div>  <!-- Second column tag close -->


	</div> <!-- Columns wrapper tag close -->


    @include('layouts.partials.order')

</div>
	
</div> <!-- Container tag close -->


@endsection