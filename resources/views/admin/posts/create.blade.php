@extends('layouts.admin')

@section('header')
	<link href="{{ url('admin-assets/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
	<link href="{{ url('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ url('css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Create Post</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('admin/dashboard') }}">Home</a>
	            </li>
	            <li>
	                <a href="{{ url('admin/posts') }}">Posts</a>
	            </li>
	            <li class="active">
	                <strong>Create</strong>
	            </li>
	        </ol>
	    </div>
	    <div class="col-lg-2">
			
	    </div>
	</div>
	<div class="wrapper wrapper-content animated fadeIn">	
		@include('admin.posts.partials.form')	
	</div>

@endsection

@section('scripts')
	<!-- SUMMERNOTE -->
    <script src="{{ url('admin-assets/js/plugins/summernote/summernote.min.js') }}"></script>
	<script src="{{ url('admin-assets/js/plugins/iCheck/icheck.min.js') }}"></script>
	<!-- Date range use moment.js same as full calendar plugin -->
    <script src="{{ url('admin-assets/js/plugins/fullcalendar/moment.min.js') }}"></script>
    <!-- Date range picker -->
    <script src="{{ url('admin-assets/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('admin-assets/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ url('js/manage/post-form.js') }}"></script>
@endsection