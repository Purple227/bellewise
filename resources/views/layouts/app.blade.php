
@include('layouts.partials.head')

<body>

	<div id="app"> <!-- ID vue wrapper tag open -->
		<main class="body">
			@include('layouts.partials.navbar')
			<div class="container">
				@yield('content')
			</div>
			@include('layouts.partials.footer')
		</main>

		<div class="fixed-cart"> <!-- cart plus fixed tag open -->
			<a class="button is-medium">
				<span class="icon">
					<i class="fas fa-cart-plus green"></i>
				</span>
				<span class="green is-bold">
					3
				</span>
			</a>
		</div> <!-- cart plus fixed tag close -->


	</div><!-- ID vue wrapper tag open -->

</body>
</html>
