@extends('layouts.main')

@section('title')
	{{$blog->title}}
@stop

@section('content')
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd class="active"><a href="{{route('blog.show',array($blog->id))}}">View</a></dd>
					<dd><a href="{{route('blog.edit',array($blog->id))}}">Edit</a></dd>
					<dd><a href="{{route('blog.destroy',array($blog->id))}}">Delete</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-12 columns">
		        
	     	<article>
	     		<div class="row">
					<div class="column large-1">
						<h5><small>{{$blog->visibility->name}}</small></h5>
					</div>
					<div class="column large-1">
						<h5><small>{{$blog->status->name}}</small></h5>
					</div>
	     			<div class="columns large-4">
	     				<div class="last-updated">
			     			<h5><small>Updated {{HelperFunction::timeAgo($blog->updated_at)}}</small></h5>
			     		</div>
	     			</div>
	     		</div>
				
				<div class="row">
					<div class="large-12 columns">
						{{$blog->body}}
					</div>
							
				</div>
			</article>
			@if($blog->comments)
				<hr>
			@endif
	   	</div>
	</div>

	<div class="row">
		<div class="columns large-11 large-centered">

		@foreach($blog->comments as $blogComment)
			<div class="comment">
				<div class="row">
					<div class="columns small-9">
						<b>{{$blogComment->comments->author}}</b>
					</div>
					<div class="columns small-3">
						<div class="text-right"> 
							<small>{{HelperFunction::timeAgo($blogComment->comments->updated_at)}}</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns large-12">
						{{$blogComment->comments->comment}}
					</div>
				</div> 
			</div>
			
		@endforeach
		</div>
	</div>

	<div class="row">
		<div class="columns large-12">
		<hr>
		<h4>Comment</h4>
		{{ Form::open(array('route'=>'blog.store_comment')) }}
			<div class="row">
				<div class="medium-8 columns">
					<label>Name Displayed
						{{ Form::text('author', 'Anonymous User') }}
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-11 columns"> 
					<label>Comment
						{{ Form::textarea("comment") }}
					</label>
				</div>
			</div>		
			{{ Form::hidden('blog-id',$blog->id) }}
			<div class="row">
				<div class="columns large-12">
					{{ Form::submit('Comment', array('class'=>'button small')) }}	
				</div>
			</div> 
					
		{{ Form::close() }}

		</div>
	</div>
	<div class="row">
		<div class="columns large-12">
		</div>
	</div>
@stop
