 @extends('layouts.app')

 @section('title')
 {{ "FAQ" }}
 @endsection

 @section('content')


 <div class="container"> <!-- Container tag open -->

 	<!-- Header section -->
  <div class="card-content">
    <div class="content has-text-centered">
      <span class="title"> Question? Look here. </span>
      <br>
      Can't find an answer? Call us at 080XXXXXXXXX
    </div>
  </div>


<div class="container"> <!-- Second container tag open -->


  <div class="columns"> <!-- Columns wrapper tag open -->

  <div class="column is-3"> <!-- First column tag open -->


<aside class="menu">
  <p class="menu-label is-bold has-text-black has-text-primary">
    Table of Contents
    <i class="fas fa-arrow-down is-hidden-desktop"></i>
  </p>
  <ul class="menu-list is-hidden-mobile">
    <li><a class="is-bold"> General </a></li>
    <li><a class="is-bold"> Trust & Safety </a></li>
    <li><a class="is-bold"> Services </a></li>
    <li><a class="is-bold"> Billing </a></li>
  </ul>
  
</aside>

  </div> <!-- First column tag close -->

  <div class="column is-9"> <!-- Second column tag open -->

<div class="content"> <!-- Content tag open -->

<p class="subtitle is-bold has-text-black" style="cursor: pointer;"><i class="fas fa-plus has-text-primary" style="margin-right: 8px;"></i> What if i did not recieve my order ? </p>
<p class="is-small">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
</p>
<hr>

<p class="subtitle is-bold has-text-black" style="cursor: pointer;"><i class="fas fa-minus has-text-primary" style="margin-right: 8px;"></i> Di get a discount if i'm a frequent customer ? </p>
<p class="is-small" v-if="false">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
</p>
<hr>

<p class="subtitle is-bold has-text-black" style="cursor: pointer;"><i class="fas fa-plus has-text-primary" style="margin-right: 8px;"></i> Can i give specific instruction to the person delivering my order ? </p>
<p class="is-small">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
</p>
<hr>

</div> <!-- Content tag open -->

  </div> <!-- Second column tag open -->


</div> <!-- Columns wrapper tag close -->

</div> <!-- Second container tag close -->



 </div> <!-- Container tag close -->

 @endsection