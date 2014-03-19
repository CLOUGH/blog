@extends('layouts.master')

@section('title')
	Blogs
@stop

@section('nav-bar')
	<a class="item">
	    <i class="home icon"></i>
	    Home
	</a>

	<a class="item">Portfolio</a>
	<a class="item active" href="{{route('blogs.index')}}">Blogs</a>
	<a class="item">About</a>
	<a class="item">Contact</a>
@stop

@section('content')

	<div class="ui grid">
		<div class="ui one wide column">
			
		</div>
		<div class="ui twelve wide column">
			<div>
				<a href="{{route('blogs.create')}}">
					<button class="ui small purple button">Create</button>
				</a>
			</div>
			@foreach ($blogs as $blog)
				<div class="ui blog-post">
					<div class="blog-header">
						<h2>{{HTML::linkRoute('blogs.show', $blog->title,$blog->id)}}</h2>
					</div>
					
					@if ($blog->image!="")
						<div class="blog-image">
							<img src="{{$blog->image}}">
						</div>
					@endif 
						
					<div class="column  blog-body">
						{{$blog->description}}
					</div>
					<div class="blog-footer">
					</div>
					
				</div>
			@endforeach
			
		</div>	
		<div class="ui one wide column">
			
		</div>
	</div>
	
@stop