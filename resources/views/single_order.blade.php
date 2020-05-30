

@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->

	<div class="box">

<div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column is-5">  <!-- First column tag open -->

<div class="content" >

<p class="subtitle has-text-black is-bold">
	Chicken Dimsum
</p>

<p class="">
	Chicken dimsum description and
	son wow i get tired lazy me damn.
		Chicken dimsum description and
	son wow i get tired lazy me damn.
</p>

<div class="buttons is-centered">

    <a class="button is-primary">
      <span class="icon is-small">
        <i class="fas fa-minus has-text-white"></i>
      </span>
      <span class="is-bold"> Minus </span>
    </a>

    <a class="button has-text-primary is-bold">
      2
    </a>


    <a class="button is-primary">
      <span class="icon is-small">
        <i class="fas fa-plus"></i>
      </span>
      <span class="is-bold"> Add </span>
    </a>

</div>

<div class="buttons is-centered">

    <a class="button is-primary is-bold">
      N1500.00
    </a>

    <a class="button is-primary is-bold ">
    	Add To Cart
    </a>



    <a class="button is-primary is-bold">
       Place Order
    </a>
</div>

</div>

  </div>  <!-- First column tag close -->


  <div class="column">  <!-- Second column tag open -->

    <figure class="image is-2by1">
      <img src="../images/chicken.png" alt="Placeholder image">
    </figure>


  </div>  <!-- Second column tag close -->

</div>  <!-- Columns wrapper tag close -->

</div>

</div>  <!-- Container tag close -->


@endsection