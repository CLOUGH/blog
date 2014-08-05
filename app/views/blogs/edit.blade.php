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
						<dd class="active"><a href="{{route('blog.show',array($blog->id))}}">View</a></dd>
						<dd><a href="{{route('blog.edit',array($blog->id))}}">Edit</a></dd>
						<dd><a href="{{route('blog.destroy',array($blog->id))}}">Delete</a></dd>
					</dl>
				</div>
			</div>
			@endif
	   		{{ Form::model($blog, array('method'=>'put','route'=>array('blog.update', $blog->id),'class'=>'ui form')) }}
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
	<!--div class="ui grid">
		

		<div class="ui one wide column">	
		</div>

		<div class="ui fourteen wide column content-area">
			<div class="content">
				<h2 class="ui header">Edit Blog</h2>	
				
		    </div>
		</div>	

		<div class="ui one wide column">			
		</div>
	</div-->
	
@stop