
@verbatim

		<a href="/cart">
			<div class=" notification is-black fixed-cart">

				<div class="buttons has-addons is-inline">
					<span class="button bg-orange has-text-white is-bold"> Cart </span>
					<span class="button is-bold orange"> {{ currentCartBasket == null ? 0 : currentCartBasket.length }}  </span>
				</div>

				<div class="buttons has-addons is-pulled-right is-inline">
					<span class="button bg-orange has-text-white is-bold"> Sum </span>
					<span class="button is-bold orange"> ₦{{ totalSumInBasket == null ? 0.00 : totalSumInBasket.toFixed(2) }} </span>
				</div>

			</div>
		</a>


@endverbatim