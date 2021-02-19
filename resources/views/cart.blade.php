
@extends('layouts.app')

@section('title')
{{ "Checkout" }}
@endsection

@section('content')

<!-- Cart section -->
<div class="box"> <!-- Box container tag open -->
	<!-- Second section -->
	<div class="column is-half-desktop is-offset-one-quarter-desktop"> <!-- is half column tag open -->

		@verbatim

		<div class="card" v-if="currentCartBasket">
			<header class="card-header bg-orange">
				<p class="card-header-title is-centered">
					<span class="subtitle is-bold has-text-white"> Ordering List  </span>
				</p>
			</header>
			<div class="card-content">
				<div class="content">

					<p class="is-bold"> Estimated Delivery Time {{ restaurantConfig == null ? '00:00' : restaurantConfig.minimium_delivery_time }} to {{ restaurantConfig == null ? '00:00' : restaurantConfig.maximium_delivery_time }} </p>

					<div class="notification is-light" v-for="(menu, index) in currentCartBasket " :key="index"> <!-- Notifacatin tag open -->
						<button class="delete" @click="removeFromCart(menu.id)"></button>

						<div class="columns"> <!-- Columns wrapper tag open -->

							<div class="column"> <!-- First column tag open -->
								<div class="content">
									<strong> {{ menu.name }} </strong>
									<br>
									<strong> ₦{{ menu.price }} </strong>
								</div>
							</div> <!-- First column tag close -->


							<div class="column"> <!-- Second column tag open -->

								<div class="content"> <!-- Content tag open -->

									<div class="buttons has-addons ">

										<span class="button"> <!--i class="fas fa-minus orange" @click="downCounterEditInCart(menu.id,menu.count * menu.price, menu.name, menu.count --)"> </i-->  </span>


										<span class="button orange is-bold is-pulled-right"> {{ menu.count  }} </span>


										<span class="button"> <!--i class="fas fa-plus orange" @click="upCounterEditInCart(menu.id, menu.count * menu.price, menu.name, menu.count ++)"> </i--> </span>

									</div>

								</div> <!-- Content tag close -->

							</div> <!-- Second column tag close -->


						</div> <!-- Columns wrapper tag close -->

					</div> <!-- Notifacatin tag close -->

					<div class="">
						<p class="subtitle  is-inline">Order</p> 
						<p class="subtitle is-inline is-pulled-right"> ₦{{ totalSumInBasket | money(2) }} </p> 
					</div>
					<br>

					<div class="">
						<p class="subtitle is-inline">Delivery</p> 
						<p class="subtitle is-inline is-pulled-right"> ₦{{ deliveryCharge.delivery_charge | money(2) }} </p> 
					</div>
					<br>

					<div class="">
						<p class="subtitle is-inline">Sum</p> 
						<p class="subtitle is-inline is-pulled-right"> ₦{{ totalSumInBasket + deliveryCharge.delivery_charge | money(2) }} </p> 
					</div>

				<div v-if="promo.amount != null"> 
					<br>
					<div class="" v-if=" totalSumInBasket >= promo.amount">
						<p class="subtitle is-inline"> Promo Price </p> 
						<p class="subtitle is-inline is-pulled-right"> ₦ {{ totalSumInBasket  -  (totalSumInBasket  * promo.discount / 100) + deliveryCharge.delivery_charge | money(2) }} </p> 
					</div>

					<div class="" v-else>
						<p class="is-bold is-inline orange"> Purchase upto ₦{{promo.amount}} and get {{promo.discount}}% off. </p> 
					</div>
				</div>

				</div>
			</div>

		</div>


		<div class="card" v-else>
			<div class="card-content">
				<div class="content is-bold has-text-centered subtitle">
					<span class="fa"> Add an item to cart. Click or tab <a href="/shop" class="orange"> here </a>  </span>
				</div>
			</div>
		</div>


		@endverbatim



		<div class="card">
			<div class="card-content">
				<p class="subtitle  is-inline"> Set Delivery Time</p> 
				<input id="delivery-time-id" type="date" data-display-mode="dialog"  data-color="danger" data-type="time" >	
			</div>	

			<footer class="card-footer ">
				<a  href="/order" class="card-footer-item is-bold has-text-black button mt-3"> Add Item </a>
				<a href="#" class="card-footer-item is-bold has-text-black button" @click="[confirm = true]"> Place Order </a>
			</footer>

		</div>


	</div> <!-- is half column tag close-->


	<!-- Confirm section -->
	<div class="" v-if="confirm"> 
		@include("modals.confirm_details")
	</div>

	<!-- Payment section -->
	<div class="" v-if="payment"> 
		@include("modals.payment")
	</div>

</div> <!-- Box container tag open -->



@push('payment_scripts')
<script src="https://checkout.flutterwave.com/v3.js"></script>
@endpush


@endsection