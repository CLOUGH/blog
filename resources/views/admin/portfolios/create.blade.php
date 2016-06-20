@extends('layouts.admin')

@section('header')
	<link href="{{ url('admin-assets/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="{{ url('admin-assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/cropper/cropper.min.css') }}" rel="stylesheet">
@endsection
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Create Portfolio</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('admin/portfolios') }}">Portfolios</a>
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
		<form method="POST" action="{{ url("admin/portfolios") }}" enctype="multipart/form-data">
			{!! csrf_field() !!}			
			<div class="row">
				<div class="col-md-2 col-md-push-10">
					<div class="ibox">
						<div class="ibox-title">
							<h5>Settings</h5>
						</div>
						<div class="ibox-content">
							<div>
								<label class="font-noraml checkbox" style="padding-left: 0px">
									<span style="margin-right: 10px">Publish</span>
									<input type="checkbox" class="i-checks" name="published" value="{{ old('published')}}">
								</label>
							</div>
							<div class="form-group">
								<label class="font-noraml">Publish At</label>
								<input type="date" class="form-control" name="publish_at" value="{{ old('publish_at') ? old('publish_at') : Carbon\Carbon::now()->toDateString()  }}">
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-md-pull-2">
					<div class="ibox">
						<div class="ibox-title">
							<h5>Content</h5>
						</div>
						<div class="ibox-content">
							<div class="form-group">
								<label class="font-noraml">Name</label>
								<input type="text" name="name" class="form-control" value="{{ old('name') }}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-noraml">Categories</label>
										<select class="form-control" name="categories[]" multiple="multiple" id="categories" style="width: 100%">
											@foreach(old('categories')? old('categories') : [] as $category)
												<option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-noraml">Tags</label>
										<select class="form-control" name="tags[]" multiple="multiple" id="tags" style="width: 100%">
											@foreach(old('tags') ?old('tags') :[]  as $tag)
												<option value="{{ $tag->id }}" selected="selected">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="font-noraml">Images</label>
								<input type="file" name="pictures[]" accept="image/*" multiple  value="{{ old('pictures') }}">
							</div>
							<div class="form-group">
								<label class="font-noraml">Description</label>
								<textarea class="form-control summernote" name="description">{{  old('description') }}</textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection

@section('scripts')
    <!-- Components -->
    <script src="{{ url('js/manage/post-form.js') }}"></script>
    <script type="text/javascript">
    	$('#categories').select2({
	 		tags: true,
	 		ajax: {
	 			url: "/api/categories",
	 			dataType: 'json',
	 			delay: 250,
	 			data: function (params) {
	 				return {
				        q: params.term, // search term
				        page: params.page
				    };
				},
				processResults: function (data, params) {
					return {
						results: data.data.map(function(category){
							return { text: category.name, id: category.name };
						}),
					};
				},
				cache: true
			},
			escapeMarkup: function (markup) { return markup; },
			templateResult: function formatState (state) {
				return $('<span>'+state.text+'</span>');
			},
			templateSelection: function (data) {
			    return data.text;
			}    		
	 	});
	 	$('#tags').select2({
	 		tags: true,
	 		ajax: {
	 			url: "/api/tags",
	 			dataType: 'json',
	 			delay: 250,
	 			data: function (params) {
	 				return {
				        q: params.term, // search term
				        page: params.page
				    };
				},
				processResults: function (data, params) {
					return {
						results: data.data.map(function(tag){
							return { text: tag.name, id: tag.name };
						}),
					};
				},
				cache: true
			},
			escapeMarkup: function (markup) { return markup; },
			templateResult: function formatState (state) {
				return $('<span>'+state.text+'</span>');
			},
			templateSelection: function (data) {
			    return data.text;
			}    		
	 	});
    </script>
@endsection