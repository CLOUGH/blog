@extends('layouts.app')
@section('page-header')
    @include('partials.ark.normal-header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection
@section('wrapper-class','wrapper-top-space animsition')
@section('content')
	 <!-- End Error 404 -->
    <div class="content-md container text-center">
        <div class="margin-b-40">
            <h2 class="font-size-70"><span class="font-size-100">404</span> OOPS!</h2>
            <p class="font-size-18">The page you are looking for not found</p>
        </div>
        <a class="btn-dark-bg btn-base-sm radius-3" href="{{ url('/') }}">Go back to Home Page</a>
    </div>
    <!-- End Error 404 -->

@endsection