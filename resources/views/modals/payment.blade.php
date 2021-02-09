
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
					<input type="radio" name="foobar" @click="[paymentToggle = true, makePayment(totalSumInBasket == null ? 0.00 : totalSumInBasket + 500, '{{ Auth::user()->id }}', '{{ Auth::user()->email }}', '{{ Auth::user()->phone}}', '{{ Auth::user()->name }}') ]">
					Credit Card 
				</label>

			</div>

	</section>

	<footer class="modal-card-foot">
		<button class="button bg-orange has-text-white" @click="[payment = false, confirm = false, checkout(totalSumInBasket == null ? 0.00 : deliveryCharge.delivery_charge + totalSumInBasket, 'pending', confirmDetail.phone, deliveryTime, confirmDetail.address, currentCartBasket, '{{Auth::user()->name}}', {{Auth::user()->id}}, deliveryCharge.delivery_charge, totalSumInBasket == null ? 0.00 : totalSumInBasket, 'Cash On Delivery' ), orderSuccessToggle = true]"> Order </button>
		<button class="button is-black" @click="[payment = false]"> Cancel </button>
	</footer>
	
</div>
</div>

