@extends('layouts.main')

@section('title')
	Home
@stop
@section('banner-img')
	<img src="{{URL::asset('')}}images/computer.jpg">
@stop

@section('content')

	
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd><a href="{{route('home.index')}}">View</a></dd>
					<dd class="active"><a href="{{route('home.edit')}}">Edit</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-9 columns">
	   		{{ Form::model($page, array('method'=>'post','route'=>array('home.update'))) }}
	   			{{Form::textarea('content',null, ['id'=>'content'])}}
	   			{{ Form::submit('Update',array('class'=>'button')) }}
	   		{{Form::close()}}
	     	<script>
            	CKEDITOR.replace( 'content',{height: 500});
        	</script>

	   	</div>
	   	<div class="sidebar large-3 columns">
	   	<h5>Blog Posts</h5>
	   		<ul class="side-nav"> 
	   		@foreach ($blogPosts as $blogPost)
	   			<li>{{HTML::linkRoute('blog.show', $blogPost->title,$blogPost->id)}}</li> 
	   		@endforeach
   			</ul>
	   	</div>
	</div>

@stop