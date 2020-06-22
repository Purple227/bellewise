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



 	<div class="box" v-if="cart"> <!-- Box container tag open -->

 		<!-- Second section -->

 		<div class="column is-half is-offset-one-quarter"> <!-- is half column tag open -->

 			<div class="card">
 				<header class="card-header">
 					<p class="card-header-title is-centered">
 						<span class="subtitle is-bold">  Order ID: #564328 </span>
 					</p>
 				</header>
 				<div class="card-content">
 					<div class="content">

				<p class="is-bold"> Estimated Delivery Time 40min</p>

 						<div class="notification is-light"> <!-- Notifacatin tag open -->

 							<div class="columns"> <!-- Columns wrapper tag open -->

 								<div class="column"> <!-- First column tag open -->
 									<div class="content">
 										<strong> Order Status </strong>
 									</div>
 								</div> <!-- First column tag close -->


 								<div class="column"> <!-- Second column tag open -->

 									<div class="content"> <!-- Content tag open -->
 										<i class="fas fa-hourglass-half has-text-primary"> Awaiting Confirmation </i>
 									</div> <!-- Content tag close -->

 								</div> <!-- Second column tag close -->


 							</div> <!-- Columns wrapper tag close -->

 						</div> <!-- Notifacatin tag close -->



 						<div class="notification is-light"> <!-- Notifacatin tag open -->

 							<div class="columns"> <!-- Columns wrapper tag open -->

 								<div class="column"> <!-- First column tag open -->
 									<div class="content">
 										<strong> Payment Method </strong>
 									</div>
 								</div> <!-- First column tag close -->


 								<div class="column"> <!-- Second column tag open -->

 									<div class="content"> <!-- Content tag open -->
 										<i class="fas fa-hand-holding-usd has-text-primary"> On Delivery </i>
 									</div> <!-- Content tag close -->

 								</div> <!-- Second column tag close -->


 							</div> <!-- Columns wrapper tag close -->

 						</div> <!-- Notifacatin tag close -->




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
 							<p class="subtitle is-inline">Summary</p> 
 							<p class="subtitle is-inline is-pulled-right">N3250.00</p> 
 						</div>


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