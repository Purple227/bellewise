	
@extends('layouts.app')

@section('title')
{{ "Success" }}
@endsection

@section('content')

	<!-- Order Status -->
	<div> 
		@include("modals.order_status")
	</div>

@endsection