@extends('layouts.main')

@section('title')
	Creat New Blog
@stop


@section('content')
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd><a href="{{route('blog.index')}}">View</a></dd>
					<dd class="active"><a href="{{route('blog.create')}}">Create</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
		<div class="large-12 columns" role="content">
		{{Form::open(['route'=>'blog.store','class'=>'ui form'])}}
			<div class="row">
				<div class="columns large-12">
					{{Form::label('Title')}}
					{{Form::input('text', 'blog-title')}}
				</div>
			</div>
			<div class="row">
				<div class="columns large-12" style="margin-bottom: 20px">
					{{Form::label('Body')}}
					{{Form::textarea('blog-body', null, ['id'=>'blog-body'])}}
		        </div>
			</div>
				
            <div class="row">
            	<div class="columns large-12 text-right" > 
					{{ Form::submit('Save',['class'=>'ui small submit button']) }}
				</div>
			</div>
        {{Form::close()}}
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'blog-body',{height: 500});
	</script>
	
@stop