@extends('layouts.app')

@section('header')
	<link href="{{ url('/assets/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('page-header')
    @include('partials.ark.normal-header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('page-class','create-post')

@section('content')
	<!--========== Breadcrumbs v2 ==========-->
    <section class="breadcrumbs-v2">
        <div class="container">
            <ol class="breadcrumbs-v2-links">
                <li><a href="{{ url('/posts') }}">Posts</a></li>
                <li class="active">Create Post</li>
            </ol>
            <h2 class="breadcrumbs-v2-title">Create Posts</h2>
        </div>
    </section>
    <!--========== End Breadcrumbs v2 ==========-->
	<div class="bg-color-sky-light">
    	<div class="content-md container">
			<form>
				<div class="form-group">
					<label>Title</label>
					<input class="form-control">
				</div>
				<div class="form-group">
					<label>Body</label>
					<textarea class="form-control"></textarea>
				</div>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ url('/assets/plugins/jquery.imagesloaded.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/assets/scripts/components/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/scripts/components/header-sticky.js') }}"></script>
@endsection