@extends('layouts.main')

@section('title')
	Blog
@stop
@section('content')
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd class="active"><a href="{{route('blog.index')}}">View</a></dd>
					<dd><a href="{{route('blog.create')}}">Create</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
		<div class="large-9 columns" role="content">
		@foreach ($blogs as $blog)
			<article>
				<div class="row">
					<div class="columns small-6" >
						<h3>{{HTML::linkRoute('blog.show', $blog->title,$blog->id)}}</h3>
					</div>
					<div class="column large-1">
						<h5><small>{{$blog->visibility->name}}</small></h5>
					</div>
					<div class="column large-1">
						<h5><small>{{$blog->status->name}}</small></h5>
					</div>
					<div class="columns large-2">
			     		<h5><small>{{HelperFunction::timeAgo($blog->updated_at)}}</small></h5>
			     	</div>
		      
				</div>
				<div class="row">
					<div class="columns large-12" >	
						{{HelperFunction::sumarize($blog->body,1000)}} ...
						{{HTML::linkRoute('blog.show', "Read More",$blog->id)}}				
						
					</div>							
				</div>
			</article>
		@endforeach
				
		</div>
		<aside class="large-3 columns">
			<h5>Blogs</h5>
			<ul class="side-nav">
				@foreach ($blogs as $blogPost)
		   			<li>{{HTML::linkRoute('blog.show', $blogPost->title,$blogPost->id)}}</li> 
		   		@endforeach
			</ul>
		</aside>
	</div>	
@stop