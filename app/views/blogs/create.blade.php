@extends('layouts.master')

@section('title')
	Creat New Blog
@stop

@section('nav-bar')
	<a class="item" href="{{route('home.index')}}">
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
		<div class="ui fourteen wide column content-area">
			<h2 class="ui header">Create Blog</h2>

			{{Form::open(['route'=>'blogs.store','class'=>'ui form'])}}
				<div class="field">
					{{Form::label('Title')}}
					{{Form::input('text', 'blog-title')}}
				</div>
				<div class="ui field">
					{{Form::label('Image')}}
					{{Form::text('blog-image')}}
				</div>
				<div class="ui field">
					{{Form::label('Description')}}
					{{Form::textarea('blog-description')}}
				</div>
				<div class="field">
					{{Form::textarea('blog-body', null, ['id'=>'blog-body'])}}
		            <script>
		                CKEDITOR.replace( 'blog-body',{height: 500});
		            </script>
		        </div>
	            <div>
					{{ Form::submit('Save',['class'=>'ui purple submit button']) }}
				</div>
	        {{Form::close()}}
		</div>	

		<div class="ui one wide column">
		</div>
	</div>
	
@stop