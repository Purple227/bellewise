
@extends('layouts.app')

@section('content')


<section class="hero register-hero box">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-white">
                Register
            </h1>
        </div>
    </div>
</section>


<div class="register-form box">

    <div class="columns"> <!-- Columns wrapper tag open -->

        <div class="column"> <!-- First column tag open -->

            <div class="field">
                <label class="label"> Name <span class="orange"> * </span>  </label>

                <div class="field-body">
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" id="name" type="text" name="name" v-model.trim="registerDetails.name" value="{{ old('name') }}" placeholder="Text input" 
                            required autofocus>

                            <span class="icon is-small is-left">
                                <i class="fas fa-user fa-lg light-orange"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.name.$invalid"> </i>
                                <i class="fas fa-check orange" v-else> </i>
                            </span>

                        </p>

                        <p class="help is-danger">
                            @{{ registerDetails.errors == null ? '' : registerDetails.errors.name[0] }}
                        </p>
                        
                    </div>
                </div>
            </div>




            <label class="label"> Address <span class="orange"> * </span></label>            
            <div class="field has-addons">
              <p class="control is-expanded has-icons-left">
                <place-autocomplete-field class="input " v-model="registerDetails.address" placeholder="Enter an an address, zipcode, or location" name="field1" api-key="AIzaSyDMMvXXoWKcvj12iqduwt5l294fLPBsuaM">  </place-autocomplete-field>
                <!-- Has icon left -->
                <span class="icon is-small is-left">
                    <i class="fas fa-map-marker light-orange"></i>
                </span>
            </p>
            <p class="control">
                <a class="button is-static has-text-black">
                  @{{ registerDetails.address }}
              </a>
          </p>
          <p class="help is-danger">
            @{{ registerDetails.errors == null ? '' : registerDetails.errors.address[0] }}
        </p>
        
    </div>


    <label class="label"> Phone  <span class="orange"> * </span>  </label>
    <div class="field has-addons">
        <p class="control">
            <span class="select">
                <select>
                    <option> +234 </option>
                </select>
            </span>
        </p>
        <p class="control is-expanded has-icons-left has-icons-right">
            <input class="input is-info" type="tel" minlength="10" maxlength="10" placeholder="Number input" v-model.trim.number="registerDetails.phone" required>

            <!-- Has icon left -->
            <span class="icon is-small is-left">
                <i class="fas fa-phone light-orange"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.phone.$invalid"> </i>
                <i class="fas fa-check light-orange" v-else> </i>
            </span>
        </p>
    </div>

    <p class="help is-danger">
        @{{ registerDetails.errors == null ? '' : registerDetails.errors.phone[0] }}
    </p>

</div> <!-- First column tag close -->




<div class="column"> <!-- Second column tag open -->


    <div class="field">
        <label class="label">E-mail Address <span class="orange"> * </span> </label>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" id="email" type="email" v-model="registerDetails.email" name="email"
                    value="{{ old('email') }}" placeholder="Email input" required autofocus>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope fa-lg light-orange"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.email.$invalid"> </i>
                        <i class="fas fa-check orange" v-else> </i>
                    </span>
                </p>

                <p class="help is-danger">
                    @{{ registerDetails.errors == null ? '' : registerDetails.errors.email[0] }}
                </p>
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Password <span class="orange"> * </span> </label>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" id="password" type="password" name="password" v-model="registerDetails.password" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-key fa-lg light-orange"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.password.$invalid"> </i>
                        <i class="fas fa-check orange" v-else> </i>
                    </span>
                </p>

                <p class="help is-danger">
                    @{{ registerDetails.errors == null ? '' : registerDetails.errors.password[0] }}
                </p>
                
            </div>
        </div>
    </div>

    <div class="field">
        <label class="label">Confirm Password <span class="orange"> * </span></label>

        <div class="field-body">
            <div class="field">
                <p class="control has-icons-right has-icons-left">
                    <input class="input" id="password-confirm" type="password"
                    name="password_confirmation" v-model="registerDetails.passwordConfirmation" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-key fa-lg light-orange"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.passwordConfirmation.$invalid"> </i>
                        <i class="fas fa-check orange" v-else> </i>
                    </span>
                </p>
            </div>
        </div>
    </div>


</div> <!-- Second column tag close -->

</div> <!-- Columns wrapper tag close -->

<div class="field">
    <div class="field-body">
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button bg-orange is-bold" v-bind:class="{ 'is-loading': registerDetails.loader }" :disabled="$v.registerDetails.$invalid" @click="registerPostMethod"> Register </button>
            </div>
        </div>
    </div>
</div>

</div>


@endsection


@push('register_address_field_style')

<style type="text/css">

    .form-control
    {
        width: 75%;
        padding: 8px 3px;
        border-radius: : black;
    }

    @media only screen and (min-width: 600px) {
      /* For tablets and desktop */

      .form-control
      {
        width: 120%;
        padding: 8px 3px;
        border-radius: : black;
    }

}

</style>

@endpush






