

<div class="modal is-active animate__animated animate__backInLeft animate__fast">
	<div class="modal-background"></div>
	<div class="modal-card">
				<div class="card-header bg-orange"> <!-- card header tag open -->
					<div class="card-header-title is-centered ">
						<span class="subtitle is-bold has-text-white"> Order Placed succesfully </span>
					</div>
				</div> <!-- card header tag close -->
		<section class="modal-card-body">



			<div class="card"> <!-- card tag open -->

{{--
				<div class="card-header"> <!-- card header tag open -->
					<div class="card-header-title is-centered">
						<span class="subtitle is-bold"> Your Order Is Placed </span>
					</div>
				</div> <!-- card header tag close -->
--}}

				<div class="card-image">
					<figure class="image is-2by1">
						<img src="/images/confirmed.svg" alt="confirmed">
					</figure>
				</div>


				<footer class="card-footer">
					<a href="{{ route('track') }}" class="card-footer-item has-text-black is-bold">Order Status</a>
					<a href="/shop" class="card-footer-item has-text-black is-bold">Order More </a>
				</footer>
			</div>  <!-- card tag close -->


		</section>
<!-- 		<footer class="modal-card-foot">
			<button class="button is-primary"> Bellewise Food Service thank you </button>
		</footer> -->
	</div>
</div>