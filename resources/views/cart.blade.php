<!-- @extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->




	<div class="box" v-if="details">
		<div class="columns"> <!-- Columns wrapper tag open -->

			<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

				<div class="card"> <!-- card tag open -->

					<div class="card-header"> <!-- card header tag open -->
						<div class="card-header-title is-centered">
							<span class="subtitle is-bold"> Confirm Details </span>
						</div>
					</div> <!-- card header tag close -->


					<div class="card-content"> <!-- Card content tag open -->

						<div class="field">
							<label class="label"> Name <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ confirmDetails.name | characterCounter }} / @{{ $v.confirmDetails.name.$params.maxLength.max }} </span> </label>						
							<div class="control has-icons-left has-icons-right">
								<input class="input is-primary" type="text" v-model.trim="confirmDetails.name" value="Purple Cole" required>
								<span class="icon is-small is-left">
									<i class="fas fa-user fa-lg has-text-primary"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetails.name.$invalid"> </i>
									<i class="fas fa-check has-text-primary" v-else> </i>
								</span>
							</div>
						</div>

						<div class="field">
							<label class="label"> Phone <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ confirmDetails.phone | characterCounter }}/ @{{ $v.confirmDetails.phone.$params.maxLength.max }} </span> </label>						
							<div class="control has-icons-left has-icons-right">
								<input class="input is-primary" type="tel" v-model.trim.number="confirmDetails.phone" value="Purple Cole" required>
								<span class="icon is-small is-left">
									<i class="fas fa-phone fa-lg has-text-primary"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetails.phone.$invalid"> </i>
									<i class="fas fa-check has-text-primary" v-else> </i>
								</span>
							</div>
						</div>

						<div class="field">
							<label class="label"> Address</label>
							<div class="control has-icons-left has-icons-right">

								<div class="is-hidden-mobile">
									<gmap-autocomplete class="input is-primary" placeholder="Address gotten from register details on desktop due to lack of GPS on desktop" required>
									</gmap-autocomplete>
								</div>

								<div class="is-hidden-desktop is-hidden-tablet">
									<gmap-autocomplete class="textarea is-primary" v-model="address" required>
									</gmap-autocomplete>
								</div>

							</div>
						</div>

					</div> <!-- Card content tag close -->

					<footer class="card-footer">
						<a class="card-footer-item is-bold has-text-black" @click="orderMethod"> Checkout </a>
					</footer>

				</div> <!-- card tag close -->


			</div> <!-- is half column tag close -->

		</div> <!-- Columns wrapper tag close -->
	</div>


	<div class="box" v-if="orderStaus">
		<div class="columns"> <!-- Columns wrapper tag open -->

			<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

<div class="card"> <!-- card tag open -->


					<div class="card-header"> <!-- card header tag open -->
						<div class="card-header-title is-centered">
							<span class="subtitle is-bold"> Your Order Is Confirmed </span>
						</div>
					</div> <!-- card header tag close -->


  <div class="card-image">
    <figure class="image is-2by1">
      <img src="/images/confirmed.svg" alt="Placeholder image">
    </figure>
  </div>


  <footer class="card-footer">
    <a href="/order/history" class="card-footer-item has-text-black is-bold">Track Order</a>
    <a href="#" class="card-footer-item has-text-black is-bold">Order ID : #564328</a>
  </footer>
</div>  <!-- card tag close -->

			</div> <!-- is half column tag close -->

		</div> <!-- Columns wrapper tag close -->
	</div>

	<!-- Cart section -->

	<div class="box" v-if="cart"> <!-- Box container tag open -->

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

					<a class="card-footer-item is-bold has-text-black" @click="cartCheckoutSwitch"> Continue </a>

				</footer>
			</div>

		</div>

	</div> <!-- is half column tag close-->


</div>  <!-- Columns wrapper tag close -->



</div> <!-- Box container tag open -->




<!-- Checkout section -->


<div class="box" v-if="checkout"> <!-- Box container tag open -->

	<div class="columns"> <!-- Columns wrapper tag open -->

		<!-- First section -->

		<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

			<div class="card">
				<header class="card-header">
					<p class="card-header-title is-centered">
						<span class="subtitle is-bold"> Select Payment Method </span>
					</p>
				</header>
				<div class="card-content">
					<div class="content">


						<div class="control">
							<label class="radio">
								<input type="radio" name="answer" @click="payment = true" checked>
								<span class="has-text-black is-bold"> Credit Card </span>
							</label>
							<label class="radio">
								<input type="radio" name="answer" @click="payment = false">
								<span class="has-text-black is-bold" > On Delivery </span>
							</label>
						</div>


					</div>
				</div>

			</div>

		</div>

	</div> <!-- is half column tag close-->

	<!-- Second section -->

	<div class="column is-half is-offset-one-quarter" v-if="payment"> <!-- is half column tag open -->

		<div class="card">
			<header class="card-header">
				<p class="card-header-title is-centered">
					<span class="subtitle is-bold"> Payment Details </span>
				</p>
			</header>
			<div class="card-content">
				<div class="content">

					<div class="field">
						<label class="label">Name On Card</label>
						<div class="control has-icons-left has-icons-right">
							<input class="input is-success Name On card" type="text" placeholder="Name On Card">
							<span class="icon is-small is-left">
								<i class="fas fa-user has-text-primary"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-exclamation-triangle has-text-danger"></i>
							</span>
						</div>
					</div>


					<div class="field">
						<label class="label">Card No.</label>
						<div class="control has-icons-right has-icons-left">
							<input class="input is-success Name On card" type="number" placeholder="Card Number">
							<span class="icon is-small is-left">
								<i class="fas fa-credit-card has-text-primary"></i>
							</span>
							<span class="icon is-small is-right">
								<i class="fas fa-exclamation-triangle has-text-danger"></i>
							</span>
						</div>
					</div>




					<div class="field is-horizontal">
						<div class="field-body">
							<div class="field">    
								<label class="label">Valid Through</label>
								<p class="control is-expanded">
									<input class="input is-success" type="number" placeholder="Expiry Date">
								</p>
							</div>
							<div class="field">
								<label class="label"> CVC </label>
								<input class="input is-success" type="email" placeholder="CVC here">
							</p>
						</div>
					</div>
				</div>




			</div>
		</div>

	</div>

</div>

<footer class="card-footer">
	<a class="card-footer-item is-bold has-text-black" @click="confirmMethod"> Continue </a>

</footer>

</div> <!-- is half column tag close-->


</div>  <!-- Columns wrapper tag close -->



</div> <!-- Box container tag open -->

</div> <!-- Container tag close -->



@endsection -->