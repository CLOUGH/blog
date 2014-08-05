@extends('layouts.main')

@section('title')
	Home
@stop
@section('banner-img')
	<img src="{{URL::asset('')}}images/about_img_copy.jpg">
@stop

@section('content')

	
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd><a href="{{route('about.index')}}">View</a></dd>
					<dd class="active"><a href="{{route('about.edit')}}">Edit</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-12 columns">
	   		{{ Form::model($page, array('method'=>'put','route'=>array('about.update'))) }}
	   			{{Form::textarea('content',null, ['id'=>'content'])}}
	   			{{ Form::submit('Update',array('class'=>'button')) }}
	   		{{Form::close()}}
	     	<script>
            	CKEDITOR.replace( 'content',{height: 500});
        	</script>

	   	</div>
	   	
	</div>

@stop