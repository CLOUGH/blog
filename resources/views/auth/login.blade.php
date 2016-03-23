@extends('layouts.noHeader')

@section('page-title','Login')
@section('body-class','bg-color-dark')
@section('content')

<div class="content-sm container-xs center-block">           
    <!-- Login -->
    <div class="login">
        <!-- Login Form Logo -->
        <div class="margin-b-50">
            <a href="{{ url('/') }}">
                <img class="login-form-logo" src="assets/img/logo-default-white.png" alt="Ark">
            </a>
        </div>
        <!-- End Login Form Logo -->

        <div class="login-content radius-3 margin-b-30">
            <!-- Login Form -->
            <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="margin-b-30">
                    <h1 class="login-form-title">Login</h1>
                    <p>Your credentials</p>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"  autocomplete="on">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" autocomplete="on" placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="login-form-actions">
                    <div class="checkbox pull-left">
                        <input id="checkbox" type="checkbox" name="remember" value="1" checked>
                        <label for="checkbox">
                            Remember me
                        </label>
                    </div>
                    <a id="forgot-password" href="{{ url('/password/reset') }}" class="login-form-forgot">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-base-bg btn-base-sm btn-block radius-3 margin-b-30">Login</button>
            </form>
            <!-- End Login Form -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="js/components/login-form.js"></script>
@endsection