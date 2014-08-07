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
					<div class="columns large-12" >
						<h3>{{HTML::linkRoute('blog.show', $blog->title,$blog->id)}}</h3>
					</div>
				</div>
				<div class="row">
					<div class="columns large-12" >
						@if($blog->image!='')
							<img src="{{$blog->image}}"/>
						@endif						
						{{$blog->description}}
					
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