
@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->

	<div class="box"> <!-- Box tag open -->

		<div class="content"> <!-- Content tag open -->

			<div class="columns"> <!-- Columns wrapper tag open -->

				<div class="column is-9"> <!-- First column tag close -->
					@include('order.order_table')

				</div> <!-- First column tag open -->


				<div class="column"> <!-- Second column tag open -->
					<div class="box">

						<p class="subtitle fa is-bold has-text-black"> Recent </p>
						
					</div>
				</div> <!-- Second column tag open -->



			</div> <!-- Columns wrapper tag close -->

		</div> <!-- Content tag close -->

	</div> <!-- Box tag open -->

	@include('layouts.partials.order_action')


</div> <!-- Container tag close -->

@endsection