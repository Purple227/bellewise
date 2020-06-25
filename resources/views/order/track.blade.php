 @extends('layouts.app')

 @section('content')


 <div class="container"> <!-- Container tag open -->


 	<p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
 		<i class="fas fa-truck green fa-2x"> </i> <br> 
 		Tracked Order
 	</p>




 	<div class="box">
 		<div class="field has-addons has-addons-centered">
 			<div class="control">
 				<input class="input is-primary" type="text" placeholder=" Enter Order ID">
 			</div>
 			<div class="control">
 				<a class="button is-primary">
 					Search
 				</a>
 			</div>
 		</div>
 	</div>



 	<div class="box"> <!-- Box container tag open -->

 		<!-- Second section -->

 		<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

 			<div class="card">


 				<nav class="level is-mobile">
 					<div class="level-item has-text-centered">
 						<div>
 							<p class="is-bold"> Status </p>
 							<p class="is-bold has-text-primary"> Placed </p>
 						</div>
 					</div>
 					<div class="level-item has-text-centered">
 						<div>
 							<p class="is-bold"> Payment </p>
 							<p class="is-bold has-text-primary"> N3250.00 </p>
 						</div>
 					</div>
 					<div class="level-item has-text-centered">
 						<div>
 							<p class="is-bold"> Items</p>
 							<p class="is-bold has-text-primary">3</p>
 						</div>
 					</div>
 				</nav>

 				<hr>



 				<div class="card-content">
 					<div class="content">

 						<p class="is-bold"> Estimated Delivery Time 40min</p>


 						<div class="notification is-light"> <!-- Notifacatin tag open -->

 							<div class="columns"> <!-- Columns wrapper tag open -->

 								<div class="column"> <!-- First column tag open -->
 									<div class="content">
 										<strong> Order Items </strong>
 									</div>
 								</div> <!-- First column tag close -->


 								<div class="column"> <!-- Second column tag open -->

 									<div class="content"> <!-- Content tag open -->

 										<div class="buttons has-addons ">
 											<span class="button is-bold"> 3 </span>
 											<span class="button"> <i class="fas fa-arrow-down has-text-primary"> </i> </span>
 										</div>

 									</div> <!-- Content tag close -->

 								</div> <!-- Second column tag close -->


 							</div> <!-- Columns wrapper tag close -->

 						</div> <!-- Notifacatin tag close -->


 						<ul class="steps" style="list-style: none;">
 							<li class="steps-segment is-active">
 								<a href="#" class="has-text-dark">
 									<span class="steps-marker">
 										<span class="icon ">
 											<i class="fa fa-shopping-cart"></i>
 										</span>
 									</span>
 									<div class="steps-content" >
 										<p class="heading"> Placed </p>

 									</div>
 								</a>
 							</li>

 							<li class="steps-segment">
 								<span class="steps-marker">
 									<span class="icon">
 										<i class="fa fa-check"></i>
 									</span>
 								</span>
 								<div class="steps-content">
 									<p class="heading">Confirm</p>
 								</div>
 							</li>
 							<li class="steps-segment">
 								<span class="steps-marker">
 									<span class="icon">
 										<i class="fa fa-truck"></i>
 									</span>
 								</span>
 								<div class="steps-content">
 									<p class="heading">On The Way</p>
 								</div>
 							</li>
 							<li class="steps-segment">
 								<span class="steps-marker">
 									<span class="icon">
 										<i class="fa fa-people-carry"></i>
 									</span>
 								</span>
 								<div class="steps-content">
 									<p class="heading"> Delivered </p>
 								</div>
 							</li>

 						</ul>



 						<hr>
 						<strong class="is-size-5"> Order Details </strong>
 						<br>
 						<strong class="is-size-5"> Order ID: #564328 </strong>


 						<br>
 						<br>

 						<div class="">
 							<p class="subtitle  is-inline">Order</p> 
 							<p class="subtitle is-inline is-pulled-right">N2750.00</p> 
 						</div>
 						<br>
 						<div class="">
 							<p class="subtitle is-inline">Delivery</p> 
 							<p class="subtitle is-inline is-pulled-right">N500.00</p> 
 						</div>
 						<br>
 						<div class="">
 							<p class="subtitle is-inline"> Summary</p> 
 							<p class="subtitle is-inline is-pulled-right">N3250.00</p> 
 						</div>

<hr>





 					</div>
 				</div>
 				<footer class="card-footer">
 					<a href="/contact" class="card-footer-item is-bold has-text-black"> Contact Us </a>
 				</footer>
 			</div>

 		</div>

 	</div> <!-- is half column tag close-->


 </div>  <!-- Columns wrapper tag close -->



</div> <!-- Box container tag open -->





</div> <!-- Container tag close -->

@endsection