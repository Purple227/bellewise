



<div class="modal is-active animate__animated animate__backInLeft animate__fast">
	<div class="modal-background"></div>
	<div class="modal-card">
				<div class="card-header bg-orange"> <!-- card header tag open -->
					<div class="card-header-title is-centered ">
						<span class="subtitle is-bold has-text-white"> Welcome {{ Auth::check() ? Str::limit( Auth::user()->name, 14)  : ''  }} </span>
					</div>
				</div> <!-- card header tag close -->
		<section class="modal-card-body">


			<div class="card"> <!-- card tag open -->
{{--
				<div class="card-header bg-orange"> <!-- card header tag open -->
					<div class="card-header-title is-centered ">
						<span class="subtitle is-bold has-text-white"> Welcome {{ Auth::check() ? Str::limit( Auth::user()->name, 6)  : ''  }} </span>
					</div>
				</div> <!-- card header tag close -->
--}}

				<div class="card-content"> <!-- Card content tag open -->

					<p class="is-italic is-mobile is-bold">
						You are only allowed to shop in one restaurant at a time. You can placed this order by clicking <a href="/cart" class="orange"> here </a> or press continue to add more items.
					</p>

				</div> <!-- Card content tag close -->

			</div> <!-- card tag close -->


		</section>
		<footer class="modal-card-foot">
			<a href="/order" class="button bg-orange has-text-white"> Continue </a>
			<button class="button is-black" @click="clearStorage"> Change Restaurant </button>
		</footer>
	</div>
</div>
