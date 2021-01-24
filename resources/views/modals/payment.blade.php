
<div class="modal is-active animate__animated animate__backInLeft animate__fast">
	<div class="modal-background"></div>
	<div class="modal-card">
		<header class="modal-card-head">
			<p class="modal-card-title"> Payment Method </p>
			<button class="delete" aria-label="close" @click="payment = false"></button>
		</header>
		<section class="modal-card-body">


			<div class="control">
				<label class="radio is-bold">
					<input type="radio" name="foobar" @click="paymentToggle = false" checked>
					Cash On Delivery
				</label>
				<label class="radio is-bold">
					<input type="radio" name="foobar" @click="paymentToggle = true">
					Credit Card
				</label>
			</div>


			<div class="card" v-if="paymentToggle"> <!-- Card tag open -->
				<header class="card-header">
					<p class="card-header-title is-centered">
						<span class="subtitle is-bold"> Payment Details @{{payment}} @{{isActive}}</span>
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
		</div> <!-- Card tag close -->



	</section>
	<footer class="modal-card-foot">
		<button class="button bg-orange is-bold has-text-white" @click="[payment = false, confirm = true]"> Save </button>
		<button class="button is-black is-bold" @click="[payment = false]"> Cancel </button>
	</footer>
</div>
</div>

