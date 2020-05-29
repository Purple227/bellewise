

<!-- Select Shop section -->

<div class="container" v-if="store"> <!-- Container tag open -->

	<p class="subtitle is-bold has-text-black has-text-centered is-family-monospace"> 
	 <i class="fas fa-store green fa-2x"> </i> <br> 
	 Selet Shop
	</p>




<div class="content" style="margin-top: 6%;" > <!-- Content tag open -->

<div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column"> <!-- First column tag open -->

<div class="card" @click="demoPicker" style="cursor: pointer;"> <!-- Card tag open -->
  <div class="card-image">
    <figure class="image  is-16by9">
      <img src="/images/landing_image.png" alt="Image">
    </figure>
  </div>
  <div class="card-content">
    <!-- content goes here -->
  </div>

  <footer class="card-footer">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Apples </a>

    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Open </a>

  </footer>

</div> <!-- Card tag close -->

  </div> <!-- First column tag close -->

  <div class="column"> <!-- Second column tag open -->

<div class="card" @click="demoPicker" style="cursor: pointer;"> <!-- Card tag open -->
  <div class="card-image">
    <figure class="image  is-16by9">
      <img src="/images/landing_image.png" alt="Image">
    </figure>
  </div>
  <div class="card-content">
    <!-- content goes here -->
  </div>

  <footer class="card-footer">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> De Choice </a>

    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Open </a>
  </footer>

</div> <!-- Card tag close -->



  </div> <!-- Second column tag open -->

  <div class="column"> <!-- Third column tag open -->

<div class="card" @click="demoCheck" style="cursor: pointer;"> <!-- Card tag open -->
  <div class="card-image">
    <figure class="image  is-16by9">
      <img src="/images/landing_image.png" alt="Image">
    </figure>
  </div>
  <div class="card-content">
    <!-- content goes here -->
  </div>


<!-- Close indication -->
  <footer class="card-footer" v-if="closed">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Mac Bite  </a>
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Closed </a>
  </footer>

<!-- Letting user know close is close -->
  <footer class="card-footer" v-if="confirm">
    <a class="card-footer-item button is-medium is-bold is-family-monospace"> Store Is Closed  </a>
  </footer>

</div> <!-- Card tag close -->

  </div> <!-- Third column tag close -->

</div> <!-- Columns wrapper tag close -->

	
</div>	<!-- Content tag close -->


<div class="buttons has-addons is-centered">
    <a class="button">
      <span class="icon is-small">
        <i class="fas fa-arrow-left green"></i>
      </span>
      <span> Previous </span>
    </a>


    <a class="button">
       3 0f 6
    </a>


    <a class="button">
      <span class="icon is-small">
        <i class="fas fa-arrow-right green"></i>
      </span>
      <span> Next </span>
    </a>

</div>
	
</div>  <!-- Container tag close -->
