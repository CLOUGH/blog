@extends('layouts.app')

@section('page-title','Login')
@section('page-class','bg-color-dark')
@section('content')

<div class="content-sm container-xs center-block">           
    <!-- Login -->
    <div class="login">
        <!-- Login Form Logo -->
        <div class="margin-b-50">
            <a href="{{ url('/') }}">
                <img class="login-form-logo" src="{{ url('assets/img/logo-default-white.png') }}" alt="Ark">
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
                <div class="form-group">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email"  autocomplete="on">

                    @if ($errors->has('email'))                        
                        <label class="error">{{ $errors->first('email') }}</label>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control {{ $errors->has('password') ? ' error' : '' }}" name="password" autocomplete="on" placeholder="Password">
                    @if ($errors->has('password'))
                        <label class="error">{{ $errors->first('password') }}</label class="error">
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
    <script type="text/javascript" src="{{ url('assets/plugins/validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/plugins/validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/login-form.js')}}"></script>
@endsection