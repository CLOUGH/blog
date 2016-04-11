@extends('layouts.app')

@section('content')
	<div class="coming-soon fullheight">
        <div class="container vertical-center-aligned">
            <a href="index.html">
                <img class="coming-soon-logo-img margin-b-30" src="assets/img/logo-default-white.png" alt="Warren Clough">
            </a>
            <div class="margin-b-60">
                <h2 class="coming-soon-title">Coming Soon</h2>
                <p class="coming-soon-text">The website is under construction.</p>
                <p class="coming-soon-text">You don't have much longer to wait so keep posted.</p>
            </div>
            <a class="btn-white-bg btn-base-md radius-3" href="{{ url('contact-me') }}">Contact Me</a>
        </div>
    </div>
@endsection

@section('scripts')
@endsection