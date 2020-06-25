

<div class="modal is-active animate__animated animate__backInLeft animate__fast">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title"> Confirm Details</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">


				<div class="card"> <!-- card tag open -->

					<div class="card-header"> <!-- card header tag open -->
						<div class="card-header-title is-centered">
							<span class="subtitle is-bold"> Confirm Details </span>
						</div>
					</div> <!-- card header tag close -->


					<div class="card-content"> <!-- Card content tag open -->

						<div class="field">
							<label class="label"> Name <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ confirmDetails.name | characterCounter }} / @{{ $v.confirmDetails.name.$params.maxLength.max }} </span> </label>						
							<div class="control has-icons-left has-icons-right">
								<input class="input is-primary" type="text" v-model.trim="confirmDetails.name" value="Purple Cole" required>
								<span class="icon is-small is-left">
									<i class="fas fa-user fa-lg has-text-primary"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetails.name.$invalid"> </i>
									<i class="fas fa-check has-text-primary" v-else> </i>
								</span>
							</div>
						</div>

						<div class="field">
							<label class="label"> Phone <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ confirmDetails.phone | characterCounter }}/ @{{ $v.confirmDetails.phone.$params.maxLength.max }} </span> </label>						
							<div class="control has-icons-left has-icons-right">
								<input class="input is-primary" type="tel" v-model.trim.number="confirmDetails.phone" value="Purple Cole" required>
								<span class="icon is-small is-left">
									<i class="fas fa-phone fa-lg has-text-primary"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.confirmDetails.phone.$invalid"> </i>
									<i class="fas fa-check has-text-primary" v-else> </i>
								</span>
							</div>
						</div>

						<div class="field">
							<label class="label"> Address</label>
							<div class="control has-icons-left has-icons-right">

								<div class="is-hidden-mobile">
									<gmap-autocomplete class="input is-primary" placeholder="Address gotten from register details on desktop due to lack of GPS on desktop" required>
									</gmap-autocomplete>
								</div>

								<div class="is-hidden-desktop is-hidden-tablet">
									<gmap-autocomplete class="textarea is-primary" v-model="address" required>
									</gmap-autocomplete>
								</div>

							</div>
						</div>

					</div> <!-- Card content tag close -->

				</div> <!-- card tag close -->


    </section>
    <footer class="modal-card-foot">
      <button class="button is-primary" @click="[confirm = false, orderStatus = true]"> Chechout</button>
      <button class="button is-black" @click="confirm = false">Cancel</button>
    </footer>
  </div>
</div>