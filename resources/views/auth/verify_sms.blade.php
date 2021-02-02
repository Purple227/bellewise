
@extends('layouts.app')
@section('content')



<div class="verify-container"> <!-- Verify container tag open -->

	<div class="columns is-mobile">
		<div class="column is-half-desktop is-offset-one-quarter-desktop">

			<section class="hero verification-hero box">
				<div class="hero-body">
					<div class="container">
						<h1 class="title has-text-white">
							Verification Code
						</h1>
					</div>
				</div>
			</section>


			<div class="box">
				<p class="subtitle is-bold has-text-centered is-marginless"> Enter Verification Code 
					<p class="deep-grey has-text-centered is-small"> We have sent a four digit verification code to your mobile number. Resend code if you didn't get any code </p>
				</p>
				<br>


			<div class="notification bg-light-orange" v-if="verification.status">
				<button class="delete" @click="verification.status = false"></button>
				@{{ verification.status }}
			</div>

				

				<div class="field has-addons has-addons-centered">
					<div class="control">
						<input class="input" minlength="4" maxlength="4" type="number" placeholder=" Verification Code" v-model="verification.code">
					</div>
				</div>

				<p class="is-bold has-text-centered cursor is-inline center" @click="resendCode"> REQUEST CODE </p>

				<br>

				<div class="control">
					<button class="button bg-deep-grey is-fullwidth is-bold orange" :disabled="$v.verification.$invalid" @click="verifyMethod"> Verify </button>
				</div>



			</div>




		</div>
	</div>

</div> <!-- Verify container tag close -->



@endsection
