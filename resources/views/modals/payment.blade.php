
<div class="modal is-active animate__animated animate__backInLeft animate__fast">

	<div class="modal-background"></div>

	<div class="modal-card">

				<div class="card-header bg-orange"> <!-- card header tag open -->
					<div class="card-header-title is-centered ">
						<span class="subtitle is-bold has-text-white"> Payment Method </span>
					</div>
				</div> <!-- card header tag close -->

		<section class="modal-card-body">


			<div class="control">

				<label class="radio is-bold">
					<input type="radio" name="foobar" @click="paymentToggle = false" checked>
					Cash On Delivery
				</label>

				<label class="radio is-bold">
					<input type="radio" name="foobar" @click="[paymentToggle = true, makePayment( promo.amount >= totalSumInBasket ? totalSumInBasket  -  (totalSumInBasket  * promo.discount / 100) + deliveryCharge.delivery_charge : (totalSumInBasket + deliveryCharge.delivery_charge), 'pending', confirmDetail.phone, deliveryTime, confirmDetail.address, currentCartBasket, '{{Auth::user()->name}}', {{Auth::user()->id}}, deliveryCharge.delivery_charge, totalSumInBasket, ' Paid', activeRestaurantName, '{{Auth::user()->email}}') ]">
					Credit Card 
				</label>

			</div>

	</section>

	<footer class="modal-card-foot">
		<button class="button bg-orange has-text-white" @click="[confirm = false, checkout( promo.amount >= totalSumInBasket ? totalSumInBasket  -  (totalSumInBasket  * promo.discount / 100) + deliveryCharge.delivery_charge : (totalSumInBasket + deliveryCharge.delivery_charge), 'pending', confirmDetail.phone, deliveryTime, confirmDetail.address, currentCartBasket, '{{Auth::user()->name}}', {{Auth::user()->id}}, deliveryCharge.delivery_charge, totalSumInBasket, 'Cash On Delivery', activeRestaurantName)]"  v-bind:class="{ 'is-loading': loader.button }"> Place Order </button>

		<button class="button is-black" @click="[payment = false]"> Cancel </button>
	</footer>
	
</div>
</div>

