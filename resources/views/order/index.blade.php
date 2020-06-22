
@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->


<div class="field is-grouped is-grouped-right">
  <div class="control">
    <div class="tags has-addons are-medium">
      <a href="">
      <span class="tag is-black">Active Orders </span>
      <span class="tag is-primary"> 8 </span>
      </a>
    </div>
  </div>

  <div class="control">
    <div class="tags has-addons are-medium">
      <a href="">
      <span class="tag is-black"> Completed Orders</span>
      <span class="tag is-primary"> 8 </span>
      </a>
    </div>
  </div>

</div>

	@include('order.active_order')

	@include('layouts.partials.order_action')

</div> <!-- Container tag close -->

@endsection