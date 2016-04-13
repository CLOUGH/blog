@extends('layouts.admin')

@section('header')
	<link href="{{ url('admin-assets/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">

@endsection
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Edit Post</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('admin/dashboard') }}">Home</a>
	            </li>
	            <li>
	                <a href="{{ url('admin/posts') }}">Posts</a>
	            </li>
	            <li class="active">
	                <strong>Edit</strong>
	            </li>
	        </ol>
	    </div>
	    <div class="col-lg-2">
			
	    </div>
	</div>
	<div class="wrapper wrapper-content animated fadeIn">	

		<div class="ibox">
			<div class="ibox-content">
				<form method="POST" action="{{ url("admin/posts/$post->id")}}">
					<input name="_method" type="hidden" value="PUT">
					{!! csrf_field() !!}
					<div class="form-group">
						<label>Title</label>
						<input class="form-control" type="text" name="title" placeholder="Post Title" value="{{ $post->title }}">
					</div>
					<div class="row">
						
						<div class="col-lg-8">
							<div class="form-group">
								<label>Publish On</label>
								<div class="input-group date">
	                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	                                	<input type="text" class="form-control" value="03/04/2016" name="publish_on">
	                            </div>
							</div>
						</div>
						<div class="col-lg-4">
							<label class="checkbox" style="margin-top: 20px;">
								<input type="checkbox" class="i-checks" {{ $post->published==true ? 'checked': '' }} name="published" value="1">
								Publish
							</label>
						</div>
					</div>
					<div class="form-group">
						<label>Post Type</label>
						<select class="form-control" name="post_type_id" value="{{ $post->post_type_id }}">
							@foreach($postTypes as $postType)
								<option value="{{ $postType->id }}" {{ $postType->slug =='standard' ? 'selected="selected"' : ""  }}>{{ $postType->name }}</option>
							@endforeach 
						</select>
					</div>
					<div class="form-group">
						<label>Body</label>
						<textarea class="form-control summernote" name="body">{{ $post->body }}</textarea>
					</div>

					<div class="text-right">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>		
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
    <script>
        $(document).ready(function(){
        	$('.i-checks').iCheck({
	            checkboxClass: 'icheckbox_square-green',
	            radioClass: 'iradio_square-green',
	        });
            $('.summernote').summernote({
            	placeholder: 'Post body.'
            });
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
       });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
	<!-- iCheck -->

@endsection