@extends('layouts.master')

@section('title')
	{{$blog->title}}
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
		@include('blogs.edit-bar', array('active_views'=>$active_views,'blog'=>$blog))

		<div class="ui one wide column">	
		</div>
		
		<div class="ui fourteen wide column content-area">
			<h2 class="ui header">{{$blog->title}}</h2>
			<div class="blog-body">
				{{$blog->body}}
			</div>
		</div>	

		<div class="ui one wide column">
		</div>
	</div>
	
@stop
