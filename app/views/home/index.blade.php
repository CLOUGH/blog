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
					<dd class="active"><a href="{{route('home.index')}}">View</a></dd>
					<dd><a href="{{route('home.edit')}}">Edit</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-9 columns">
     		<div class="last-updated">
     			<h5><small>Updated {{HelperFunction::timeAgo($page->updated_at)}}</small></h5>
     		</div>
		      
	     	{{$page->content}}
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