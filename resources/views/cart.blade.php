
@extends('layouts.app')

@section('title')
{{ "Checkout" }}
@endsection

@section('content')

	<!-- Cart section -->
	<div class="box"> <!-- Box container tag open -->

		<!-- Second section -->
		<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

			<div class="card">
				<header class="card-header">
					<p class="card-header-title is-centered">
						<span class="subtitle is-bold"> Order 3 </span>
					</p>
				</header>
				<div class="card-content">
					<div class="content">

						<p class="is-bold"> Estimated Delivery Time 40min</p>

						<div class="notification is-light"> <!-- Notifacatin tag open -->
							<button class="delete"></button>


							<div class="columns"> <!-- Columns wrapper tag open -->

								<div class="column"> <!-- First column tag open -->
									<div class="content">
										<strong> Burger </strong>
										<br>
										<strong> N1000.00 </strong>
									</div>
								</div> <!-- First column tag close -->


								<div class="column"> <!-- Second column tag open -->

									<div class="content"> <!-- Content tag open -->

										<div class="buttons has-addons ">
											<span class="button"> <i class="fas fa-minus has-text-primary"> </i>  </span>
											<span class="button"> 3 </span>
											<span class="button"> <i class="fas fa-plus has-text-primary"> </i> </span>
										</div>

									</div> <!-- Content tag close -->

								</div> <!-- Second column tag close -->


							</div> <!-- Columns wrapper tag close -->

						</div> <!-- Notifacatin tag close -->

						<div class="notification is-light"> <!-- Notifacatin tag open -->
							<button class="delete"></button>


							<div class="columns"> <!-- Columns wrapper tag open -->

								<div class="column"> <!-- First column tag open -->
									<div class="content">
										<strong> Chicken </strong>
										<br>
										<strong> N1500.00 </strong>
									</div>
								</div> <!-- First column tag close -->


								<div class="column"> <!-- Second column tag open -->

									<div class="content"> <!-- Content tag open -->

										<div class="buttons has-addons ">
											<span class="button"> <i class="fas fa-minus has-text-primary"> </i>  </span>
											<span class="button"> 1 </span>
											<span class="button"> <i class="fas fa-plus has-text-primary"> </i> </span>
										</div>

									</div> <!-- Content tag close -->

								</div> <!-- Second column tag close -->


							</div> <!-- Columns wrapper tag close -->

						</div> <!-- Notifacatin tag close -->



						<div class="notification is-light"> <!-- Notifacatin tag open -->
							<button class="delete"></button>


							<div class="columns"> <!-- Columns wrapper tag open -->

								<div class="column"> <!-- First column tag open -->
									<div class="content">
										<strong> Fish Pie </strong>
										<br>
										<strong> N250.00 </strong>
									</div>
								</div> <!-- First column tag close -->


								<div class="column"> <!-- Second column tag open -->

									<div class="content"> <!-- Content tag open -->

										<div class="buttons has-addons ">
											<span class="button"> <i class="fas fa-minus has-text-primary"> </i>  </span>
											<span class="button"> 1 </span>
											<span class="button"> <i class="fas fa-plus has-text-primary"> </i> </span>
										</div>

									</div> <!-- Content tag close -->

								</div> <!-- Second column tag close -->


							</div> <!-- Columns wrapper tag close -->

						</div> <!-- Notifacatin tag close -->

						<div class="">
							<p class="subtitle  is-inline"> Set Delivery Time</p> 
							<!--p class="subtitle is-inline is-pulled-right">N2750.00</p-->
							<button ref='calendarTrigger' data-display-mode="dialog" type='button' class="">Change</button> 
						</div>
						<br>

						<div class="">
							<p class="subtitle  is-inline">Order</p> 
							<p class="subtitle is-inline is-pulled-right">N2750.00</p> 
						</div>
						<br>
						<div class="">
							<p class="subtitle is-inline">Delivery</p> 
							<p class="subtitle is-inline is-pulled-right">N500.00</p> 
						</div>
						<br>
						<div class="">
							<p class="subtitle is-inline">Summary</p> 
							<p class="subtitle is-inline is-pulled-right">N3250.00</p> 
						</div>

					</div>
				</div>
				<footer class="card-footer">
					<a href="/order" class="card-footer-item is-bold has-text-black"> Add Item </a>

					<a class="card-footer-item is-bold has-text-black" @click="[payment = true]"> Ordr Now </a>

				</footer>
			</div>

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