@extends('layouts.master')

@section('title')
	Blogs
@stop

@section('nav-bar')
	@include('layouts.navbar',array($navbar))
@stop

@section('content')

	<div class="ui grid">
		<div class="ui one wide column">
			
		</div>
		<div class="ui twelve wide column">
			<div>
				<a href="{{route('blog.create')}}">
					<button class="ui small purple button">Create</button>
				</a>
			</div>
			@foreach ($blogs as $blog)
				<div class="ui blog-post">
					<div class="blog-header">
						<h2>{{HTML::linkRoute('blog.show', $blog->title,$blog->id)}}</h2>
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