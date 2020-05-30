
@extends('layouts.app')

@section('content')

<div class="container"> <!-- Container tag open -->

<div class="box">


	<div class="content"> <!-- Content tag open -->

		<p class="title has-text-black is-family-monospace">
			The value that hold us 
			<br>
			true and to acount. 
		</p>



<div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column"> <!-- First column tag open -->

    <div class="box" style="padding: 15px;">
    	<p class="subtitle is-bold is-marginless"> <i class="fas fa-smile has-text-info"> <span class="has-text-black"> Simplicity </span> </i>
    	<p class=" fa">
    		Delivery being made beautifully simple are at the heart of everything we do. 
    	</p>
    </p>
    </div>

  </div>  <!-- First column tag close -->

  <div class="column">


    <div class="box" style="padding: 15px;">
      <p class="subtitle is-bold is-marginless"> <i class="fas fa-heart has-text-danger"> <span class="has-text-black"> Social Good </span> </i>
      <p class=" fa">
        We believe in making things better for everyone, even if just by a little bit!
      </p>
    </p>
    </div>

  </div>

  <div class="column">


    <div class="box" style="padding: 15px;">
      <p class="subtitle is-bold is-marginless"> <i class="fas fa-shield-alt light-green"> <span class="has-text-black"> Trust </span> </i>
      <p class=" fa">
        We work on creating trust which can only be nurtured through authencity and trasparency.
      </p>
    </p>
    </div>

  </div>



</div> <!-- Columns wrapper tag close -->



<div class="notification bg-green has-text-black" > <!-- Notification 
  tag open -->

<div class="columns" style="padding: 30px;"> <!-- Columns wrapper tag open -->

  <div class="column">
    <div class="content">
      <p class="subtitle has-text-white is-bold is-marginless is-family-monospace">
        Ready for a simple future?
      <p class="subtitle green is-bold is-family-monospace has-text-white">
        Try us by placing an order!</p>
      </p>


    </div>
  </div>


  <div class="column ">
    <a href="/order" class="button is-primary is-bold is-pulled-right is-medium"> <span class="fa"> Place Order </span> </a>
  </div>

</div> <!-- Columns wrapper tag close -->


</div>  <!-- Notification tag close -->



	</div> <!-- Content tag close -->

</div>
	
</div> <!-- Container tag close -->


@endsection