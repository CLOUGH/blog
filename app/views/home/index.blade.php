@extends('layouts.master')

@section('title')
	Home
@stop

@section('nav-bar')
	<a class="active item">
	    <i class="home icon"></i> 
	    Home
	</a>
	<a class="item" href="{{route('blogs.index')}}">Blogs</a>
	<a class="item">Portfolio</a>
	<a class="item">About</a>
	<a class="item">Contact</a>
@stop

@section('content')
	<div class="ui grid">
		<div class="ui two wide column">
			
		</div>
		<div class="ui twelve wide column content-area">
			<div class="content">
				<h2>Hi there!</h2>
				<p>
					

				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>	

		<div class="ui two wide column">
		</div>
	</div>
	
@stop