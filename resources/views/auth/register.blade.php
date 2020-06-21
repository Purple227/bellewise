@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Register
            </h1>
        </div>
    </div>
</section>

<div class="columns is-marginless is-centered">
    <div class="column is-5">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Register</p>
            </header>

            <div class="card-content">
                <form class="register-form" method="POST" action="{{ route('register') }}">

                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label"> Name <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ registerDetails.name | characterCounter }} / @{{ $v.registerDetails.name.$params.maxLength.max }} </span> </label>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-primary" id="name" type="name" name="name" v-model.trim="registerDetails.name" value="{{ old('name') }}"
                                    required autofocus>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user fa-lg has-text-primary"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.name.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>

                                </p>

                                @if ($errors->has('name'))
                                <p class="help is-danger">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>



                    <div class="field">
                        <label class="label"> Address </label>

                        <div class="field-body">
                            <div class="field">
                                <!-- Desktop input display -->
                                <p class="control has-icons-left has-icons-right is-hidden-mobile">

                                    <gmap-autocomplete class="input is-primary" required>
                                    </gmap-autocomplete>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-map-marker-alt fa-lg has-text-primary"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.address.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>
                                </p>

                                @if ($errors->has('name'))
                                <p class="help is-danger">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label"> Phone <span class="has-text-primary"> * </span> <span class="is-pulled-right"> @{{ registerDetails.phone | characterCounter }}/ @{{ $v.registerDetails.phone.$params.maxLength.max }} </span> </label>

                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-primary" type="tel" v-model.trim.number="registerDetails.phone" value="Purple Cole" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-phone fa-lg has-text-primary"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.phone.$invalid"> </i>
                                <i class="fas fa-check has-text-primary" v-else> </i>
                            </span>
                        </div>
                    </div>



                    <div class="field">
                        <label class="label">E-mail Address</label>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-primary" id="email" type="email" v-model="registerDetails.email" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope fa-lg has-text-success"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.email.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>
                                </p>

                                @if ($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-primary" id="password" type="password" name="password" v-model="registerDetails.password" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-key fa-lg has-text-primary"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.password.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>
                                </p>

                                @if ($errors->has('password'))
                                <p class="help is-danger">
                                    {{ $errors->first('password') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirm Password</label>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-right has-icons-left">
                                    <input class="input is-primary" id="password-confirm" type="password"
                                    name="password_confirmation" v-model="registerDetails.passwordConfirmation" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-key fa-lg has-text-success"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.passwordConfirmation.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                        <div class="field is-horizontal">

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Register</button>
                                    </div>
                                </div>
                            </div>

                            <div class="field-label">
                                <div class="field has-addons">
  <p class="control">
    <button class="button is-bold">
      Or Sign Up
    </button>
  </p>
  <p class="control">
    <button class="button">
      <span class="icon is-small">
        <i class="fab fa-facebook-f has-text-info"></i>
      </span>
    </button>
  </p>
  <p class="control">
    <button class="button">
      <span class="icon is-small">
        <i class="fab fa-twitter has-text-info"></i>
      </span>
    </button>
  </p>
</div>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection