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
		<div class="ui fourteen wide column content-area">
			<table class="ui table">
				<tr>
					<th>Title</th>
					<th>Actions</th>
				</tr>
			@foreach ($blogs as $blog)
				<tr>
					<td>{{HTML::linkRoute('blogs.show', $blog->title,$blog->id)}}</td>
					<td>
						<a href="{{route('blogs.edit',$blog->id)}}" style="text-decoration: none;color:black">
							<i class="edit icon"></i>
							Edit
						</a>
					</td>
				</tr>
			@endforeach
			</table>
			<br/>
			<a href="{{route('blogs.create')}}">
			<button class="ui small purple button">Create</button>
			</a>
		</div>	
		<div class="ui one wide column">
			
		</div>
	</div>
	
@stop