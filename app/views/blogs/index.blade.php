@extends('layouts.main')

@section('title')
	Blogs
@stop
@section('banner-img')
	<img src="{{URL::asset('')}}images/blog-banner.png">
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
					<div class="columns small-8" >
						<h3>{{HTML::linkRoute('blog.show', $blog->title,$blog->id)}}</h3>
					</div>
					<div class="columns small-4 small-right">
						<div class="text-right">
			     			<h5><small>Updated {{HelperFunction::timeAgo($blog->updated_at)}}</small></h5>
			     		</div>
			     	</div>
		      
				</div>
				<div class="row">
					<div class="columns large-12" >	
						{{HelperFunction::blogPostSnippet($blog->blog)}}					
						{{$blog->body}}
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