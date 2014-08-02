@extends('layouts.main')

@section('title')
	Home
@stop

@section('content')
	<div class="banner ui page grid">
		<div class="ui fourteen wide column">
			<h2>Warren Clough Blog</h2>
			<p>Here i'll give you the run down on my latest projects and ones to come. </p>
		</div>
	</div>
	<div class="ui page grid content center">  

		<div class="ui twelve wide column container" id="home-container">
			<div class="content-area">
				@foreach ($blogPosts as $blogPost)
					<div class="blog-post ui segment"> 
						<div class="header">
							<h2>{{HTML::linkRoute('blog.show', $blogPost->title,$blogPost->id)}}</h2>
						</div>
						@if(false)
							<div class="image">
								<img src="{{$blogPost->image}}">
							</div>
						@endif
						<div class="body">
							{{$blogPost->description}}
						</div>
						<div class="footer"></div>
					</div>
				@endforeach				
			</div>	
		</div>
	</div>
	
@stop