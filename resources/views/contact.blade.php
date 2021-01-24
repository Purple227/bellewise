
@extends('layouts.app')

@section('title')
{{ "Contact" }}
@endsection

@section('content')

<div class="container"> <!-- Container tag open -->

	<div class="box">


		<div class="columns"> <!-- Columns wrapper tag open -->

			<div class="column is-8"> <!-- First column tag open -->

				<div class="content iframe-container">

					<iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.7224011754424!2d8.34146551447402!3d4.98571994050913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1067876bfab198c5%3A0x8f69a9455294eada!2sApples%20Fried%20Chicken%20Ltd!5e0!3m2!1sen!2sng!4v1590710760362!5m2!1sen!2sng"> </iframe>
				</div>


			</div>  <!-- First column tag close -->


			<div class="column is-4"> <!-- Second column tag open -->


				<div class="box"> <!-- Content tag open -->

					<p class="subtitle is-bold fa has-text-black">
						CONNECT
					</p>

					<br>

					<span class="icon has-text-info is-medium">
						<i class="fab fa-facebook-f fa-lg"></i>
					</span>
					<span class="icon has-text-link	 is-medium" style="margin-left: 28px;">
						<i class="fab fa-twitter fa-lg"></i>
					</span>
					<span class="icon has-text-warning is-medium" style="margin-left: 28px;">
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
							<input class="input is-black" type="Email" placeholder="Email" v-model="contact.email">
							<span class="icon is-small is-left">
								<i class="fas fa-envelope light-orange"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.contact.email.$invalid"> </i>
								<i class="fas fa-check orange" v-else> </i>
							</span>
						</div>
					</div>

					<div class="field">
						<div class="control has-icons-right has-icons-left">
							<input class="input is-black" type="text" placeholder="Subject" v-model="contact.subject">
							<span class="icon is-small is-left">
								<i class="fas fa-heading light-orange"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-check orange" v-if="$v.contact.subject.required"> </i>
								<i class="fas fa-exclamation-triangle has-text-danger" v-else> </i>
							</span>
						</div>
					</div>


					<div class="field">
						<div class="control">
							<textarea class="textarea is-black" placeholder="Message" v-model="contact.message"></textarea>
						</div>
						<p class="help is-danger is-bold" v-if="$v.contact.message.required">
							You straight
						</p>

						<p class="help orange is-bold" v-else>
							Field required
						</p>
					</div>

					<div class="field">
						<div class="control">
							<button class="button bg-orange is-bold has-text-black" v-bind:class="{ 'orange': contact.loader  }" :disabled="$v.contact.$invalid">SEND</button>
						</div>
					</div>

				</div>  <!-- Content tag close -->


				<hr>


				<div class="box"> <!-- Content tag open -->
					<p class="subtitle is-bold fa has-text-black">
						OTHER WAY
					</p>


					<p class="is-bold is-marginless">
						<i class="fas fa-envelope light-orange"> <span class="has-text-black"> bellewiselogistics@gmail.com </span>  </i>
						<p class="is-bold">
							<i class="fas fa-phone light-orange"> <span class="has-text-black"> +234XXXXXXXXXX </span> </i>
						</p>
					</p>


				</div>  <!-- Content tag close -->


			</div>  <!-- Second column tag close -->


		</div> <!-- Columns wrapper tag close -->


		@include('layouts.partials.view_cart')

	</div>
	
</div> <!-- Container tag close -->


@endsection