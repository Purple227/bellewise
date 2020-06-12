
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

	</div><!-- ID vue wrapper tag open -->
	

</body>
</html>
