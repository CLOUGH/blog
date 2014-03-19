@extends('layouts.master')

@section('title')
	Edit - {{$blog->title}}
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
			@include('blogs.edit-bar', array($active_views))
			<div class="content">
				<h2 class="ui header">Edit Blog</h2>	
				{{ Form::model($blog, array('method'=>'put','route'=>array('blogs.update', $blog->id),'class'=>'ui form')) }}
					<div class="field">
						{{Form::label('Title')}}
						{{Form::text('title')}}
					</div>				
					<div class="ui input focus">
						{{Form::label('Image')}}
						{{Form::text('image')}}
					</div>
					<div class="ui field">
						{{Form::label('Description')}}
						{{Form::textarea('description')}}
					</div>
					<div class="field">
						{{Form::textarea('body', null, ['id'=>'blog-body'])}}
			            <script>
			                CKEDITOR.replace( 'blog-body',{height: 500});
			            </script>
			        </div>
		            <div>
						{{ Form::submit('Update',['class'=>'ui purple submit button']) }}
					</div>
		        {{Form::close()}}
		    </div>
		</div>	

		<div class="ui one wide column">			
		</div>
	</div>
	
@stop