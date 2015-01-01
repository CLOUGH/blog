@extends('layouts.main')

@section('title')
	Edit - {{$blog->title}}
@stop


@section('content')
	<div class="row">
	   	<div class="content large-12 columns">
	   	@if(Auth::check())
			<div class="row">
				<div class="large-12 columns">
					<dl class="sub-nav">
						<dd><a href="{{route('blog.show',array($blog->id))}}">View</a></dd>
						<dd class="active"><a href="{{route('blog.edit',array($blog->id))}}">Edit</a></dd>
						<dd><a href="{{route('blog.destroy',array($blog->id))}}">Delete</a></dd>
					</dl>
				</div>
			</div>
			@endif
	   		{{ Form::model($blog, array('method'=>'put','route'=>array('blog.update', $blog->id),'class'=>'ui form')) }}
				<div class="row">
					<div class="columns small-3">
						{{Form::label('Status')}}
						{{Form::select('status',$status,$blog->status->id)}}
					</div>
					<div class="column small-3">
						{{Form::label('Date Created')}}
						{{Form::text('created_at',$blog->created_at,array('readonly'))}}
					</div>
					<div class="columns small-3">
						{{Form::label('Visibility')}}
						{{Form::select('visibility',$visibility,$blog->visibility->id)}}
					</div>
				</div>
	   			<div class="row">
	   				<div class="columns large-12">
						<div class="field">
							{{Form::label('Title')}}
							{{Form::text('title')}}
						</div>			
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns" style="margin-bottom:20px">			
						<div class="field">
							{{Form::label('Body')}}
							{{Form::textarea('body', null, ['id'=>'blog-body'])}}				            
				        </div>
				    </div>
				</div>
		        <div class="row right">
		        	<div class="columns large-12"> 
						{{ Form::submit('Update',array('class'=>'ui small submit button'))}}
					</div>
				</div>
		    {{Form::close()}}
	   	</div>
	</div>	
	<script>
        CKEDITOR.replace( 'blog-body',{height: 500});
    </script>
@stop