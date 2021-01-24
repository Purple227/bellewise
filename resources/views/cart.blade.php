
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

			<div class="card">
				<header class="card-header bg-orange">
					<p class="card-header-title is-centered">
						<span class="subtitle is-bold has-text-white"> Ordering List  </span>
					</p>
				</header>
				<div class="card-content">
					<div class="content">

						<p class="is-bold"> <!-- Estimated Delivery Time {{ restaurantConfig.minimium_delivery_time }} to {{ restaurantConfig.maximium_delivery_time }} min  --> </p>

						<div class="notification is-light" v-for="(menu, index) in currentCartBasket " :key="index"> <!-- Notifacatin tag open -->
							<button class="delete" @click="removeFromCart(menu.id)"></button>

							<div class="columns"> <!-- Columns wrapper tag open -->

								<div class="column"> <!-- First column tag open -->
									<div class="content">
										<strong> {{ menu.name }} </strong>
										<br>
										<strong> ₦{{ menu.count * menu.price }} </strong>
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
							<p class="subtitle  is-inline"> Set Delivery Time</p> 
	                         <input id="delivery-time" type="date" data-display-mode="dialog"  data-color="danger" data-type="time" >							
						</div>
						<br>

						<div class="">
							<p class="subtitle  is-inline">Order</p> 
							<p class="subtitle is-inline is-pulled-right"> {{ totalSumInBasket == null ? 0.00 : totalSumInBasket.toFixed(2) }} </p> 
						</div>
						<br>

						<div class="">
							<p class="subtitle is-inline">Delivery</p> 
							<p class="subtitle is-inline is-pulled-right">N500.00</p> 
						</div>
						<br>

						<div class="">
							<p class="subtitle is-inline">Summary</p> 
							<p class="subtitle is-inline is-pulled-right"> ₦ {{ totalSumInBasket == null ? 0.00 : totalSumInBasket + 500 | money(2) }}</p> 
						</div>

					</div>
				</div>
				<footer class="card-footer">
					<a  href="/order" class="card-footer-item is-bold has-text-black"> Add Item </a>
					<a class="card-footer-item is-bold has-text-black" @click="[confirm = true]"> Ordr Now </a>
				</footer>
			</div>

	@endverbatim


	</div> <!-- is half column tag close-->


</div>  <!-- Columns wrapper tag close -->


<!-- Confirm section -->
<div class="" v-if="confirm"> 
@include("modals.confirm_details")
</div>

<!-- Order Status -->
<div class="" v-if="orderStatus"> 
@include("modals.order_status")
</div>

<!-- Payment section -->
<div class="" v-if="payment"> 
@include("modals.payment")
</div>


</div> <!-- Box container tag open -->



@endsection