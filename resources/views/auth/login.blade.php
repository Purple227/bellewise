@extends('layouts.app')

@section('content')

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Login
            </h1>
        </div>
    </div>
</section>

<div class="columns is-marginless is-centered">
    <div class="column is-5">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Login</p>
            </header>

            <div class="card-content">
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">E-mail Address</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-primary" id="email" type="email" v-model="loginDetails.email" name="email"
                                    value="{{ old('email') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope fa-lg has-text-primary"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.loginDetails.email.$invalid"> </i>
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

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">Password</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" id="password" type="password" name="password" v-model="loginDetails.password" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-key fa-lg has-text-primary"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.loginDetails.password.$invalid"> </i>
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

                    <div class="field is-horizontal">
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




                    <div class="control has-text-centered">
                        <a href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>


                    <div class="field is-horizontal">
                        
                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-primary" disabled>Login</button>
                                </div>
                            </div>
                        </div>



                        <div class="field-label">
                            <div class="field has-addons">
                              <p class="control">
                                <button class="button is-bold">
                                  Or Login
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