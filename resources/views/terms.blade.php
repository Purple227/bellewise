
@extends('layouts.app')
@section('content')


@verbatim

<div class="terms-container"> <!-- Terms container tag open -->

	<section class="hero terms-hero box">
		<div class="hero-body">
			<div class="container">
				<h1 class="title has-text-white">
					Terms and Condition
				</h1>
			</div>
		</div>
	</section>



  <div class="card" v-if="termsCondition == null">
    <div class="card-content">
      <div class="content is-bold has-text-centered subtitle">

        <span class="fa"> Coming soon. </span>

      </div>
    </div>
  </div>


<div class="content has-text-weight-semibold box"  v-else>
	<p v-html="termsCondition.terms"></p>
	<time :datetime="termsCondition.updated_at" class="orange"> Last Updated At ::{{ termsCondition.updated_at  | format('D MMM YYYY') }} </time>
</div>


@endverbatim

<div class="" v-if="currentCartBasket">
@include('layouts.partials.view_cart')
</div>

<div class="" v-else>
@include('layouts.partials.order_action')
</div>


</div> <!-- Terms container tag close -->

@endsection