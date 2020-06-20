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

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">Name</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" id="name" type="name" name="name" v-model.trim="registerDetails.name" value="{{ old('name') }}"
                                    required autofocus>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user fa-lg has-text-success"></i>
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



                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label"> Address </label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <!-- Desktop input display -->
                                <p class="control has-icons-left has-icons-right is-hidden-mobile">
                                    <input class="input" id="address" type="address" name="adress" v-model.trim="registerDetails.address" value="{{ old('address') }}"
                                    required autofocus>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-place fa-lg has-text-success"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.registerDetails.address.$invalid"> </i>
                                        <i class="fas fa-check has-text-primary" v-else> </i>
                                    </span>
                                </p>

                                <!-- Mobile/ Tablet input display -->
                                <p class="control has-icons-left has-icons-right is-hidden-desktop">
                                    <input class="input" id="address" type="address" name="adress" v-model.trim="address" value="{{ old('address') }}"
                                    required autofocus>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-place fa-lg has-text-success"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle has-text-danger" v-if="$v.address.$invalid"> </i>
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



                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">E-mail Address</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" id="email" type="email" v-model.trim="registerDetails.email" name="email"
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

                    <div class="field is-horizontal">
                        <div class="field-label">
                            <label class="label">Password</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" id="password" type="password" name="password" required>
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
                        <div class="field-label">
                            <label class="label">Confirm Password</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" id="password-confirm" type="password"
                                    name="password_confirmation" required>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label"></div>

                        <div class="field-body">
                            <div class="field is-grouped">
                                <div class="control">
                                    <button type="submit" class="button is-primary" disabled>Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection