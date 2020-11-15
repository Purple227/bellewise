@extends('layouts.app')

@section('content')


<section class="hero login-hero box">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-white">
                Login
            </h1>
        </div>
    </div>
</section>


<div class="notification bg-light-orange" v-if="loginDetails.errors">
  <button class="delete" @click="loginDetails.errors = null"></button>
  @{{ loginDetails.errors }}
</div>


<div class="columns"> <!-- Columns wrapper tag open -->


    <div class="column"> <!-- First column tag open -->

        <div class="field">
            <div class="field-label">
                <label class="label">E-mail Address</label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" id="email" type="email" v-model="loginDetails.email" name="email"
                        value="{{ old('email') }}" required autofocus>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope fa-lg light-orange"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.loginDetails.email.$invalid"> </i>
                            <i class="fas fa-check orange" v-else> </i>
                        </span>
                    </p>

                </div>
            </div>
        </div>


        <div class="control">
            <a href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>

    </div> <!-- First column tag close -->





    <div class="column"> <!-- Second column tag open -->

        <div class="field">
            <div class="field-label">
                <label class="label">Password</label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" id="password" type="password" name="password" v-model="loginDetails.password" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-key fa-lg light-orange"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.loginDetails.password.$invalid"> </i>
                            <i class="fas fa-check orange" v-else> </i>
                        </span>
                    </p>

                </div>
            </div>
        </div>

        <div class="field">
            <div class="field-label"></div>

            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <label class="checkbox">
                            <input type="checkbox"
                            name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
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
                <button type="submit" class="button bg-orange is-bold" v-bind:class="{ 'is-loading': loginDetails.loader }" :disabled="$v.loginDetails.$invalid" @click="loginMethod">Login</button>
            </div>

            <p class="control" v-if="false">
                <button class="button">
                  <span class="icon is-small">
                    <i class="fab fa-facebook-f has-text-info"></i>
                </span>
            </button>
        </p>

        <p class="control" v-if="false">
            <button class="button">
              <span class="icon is-small">
                <i class="fab fa-twitter has-text-info"></i>
            </span>
        </button>
    </p>

</div>
</div>

</div>


@endsection