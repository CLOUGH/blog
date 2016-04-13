@extends('layouts.admin')

@section('header')
	<link href="{{ url('admin-assets/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
	<link href="{{ url('admin-assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">
@endsection
@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Posts</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="{{ url('admin/dashboard') }}">Home</a>
	            </li>
	            <li class="active">
	                <strong>Posts</strong>
	            </li>
	        </ol>
	    </div>
	    <div class="col-lg-2">
			
	    </div>
	</div>
	<div class="wrapper wrapper-content animated fadeIn">
		

		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12 text-right">
						<a href="{{ url('admin/posts/create') }}" class="btn btn-primary">Create Post</a>
						<br>
						<br>
					</div>
				</div>
				<div class="row">
					
					<div class="col-lg-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th></th>
									<th style="width: 30%">Title</th>
									<th>Type</th>
									<th>Published</th>
									<th>Created</th>
									<th>Updated</th>
									<th>Created By</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($posts as $post)
									<tr>
										<td>{{ $post->id }}</td>
										<td>{{ $post->title }}</td>
										<td>{{ $post->type->name }}</td>
										<td><input type="checkbox" class="i-checks" checked="{{ $post->is_published ? 'checked' : '' }}" disabled="disabled"> </td>
										<td>{{ $post->created_at->toFormattedDateString() }}</td>
										<td>{{ $post->updated_at->toFormattedDateString() }}</td>
										<td>{{ $post->createdBy->name }}</td>
										<td>
											<div class="btn-group">
	                                            <a href="{{ url("posts/$post->id") }}" class="btn-white btn btn-xs">View</a>
	                                            <a href="{{ url("admin/posts/$post->id/edit") }}"class="btn-white btn btn-xs">Edit</a>
	                                        </div>
										</td>
									</tr>
								@endforeach
								@if(empty($post))
									<tr>
										<td colspan="8" class="text-center">No Records Found.</td>
									</tr>
								@endif
							</tbody>
							<tfoot>
								<tr>
                                    <td colspan="8" class="footable-visible">
                                        {!! $posts->links() !!}
                                    </td>
                                </tr>
							</tfoot>
						</table>
						
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection

@section('scripts')
	<!-- iCheck -->
	<script src="{{ url('admin-assets/js/plugins/iCheck/icheck.min.js') }}"></script>
	<script>
	    $(document).ready(function () {
	        $('.i-checks').iCheck({
	            checkboxClass: 'icheckbox_square-green',
	            radioClass: 'iradio_square-green',
	        });
	    });
	</script>

@endsection