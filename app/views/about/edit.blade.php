@extends('layouts.main')

@section('title')
	About
@stop

@section('content')

	
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd><a href="{{route('about.index')}}">View</a></dd>
					<dd class="active"><a href="{{route('about.edit')}}">Edit</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-12 columns">
	   		{{ Form::model($page, array('method'=>'put','route'=>array('about.update'))) }}
	   			<div class="row" >
	   				<div class="columns large-12" style="margin-bottom:20px;" >
	   					{{Form::textarea('content',null, ['id'=>'content'])}}
	   				</div>
	   			</div>
	   			<div class="row right" >
	   				<div class="columns large-12"> 
	   					{{ Form::submit('Update',array('class'=>'button small')) }}
	   				</div>
	   			</div>
	   		{{Form::close()}}
	     	

	   	</div>
	   	
	</div>
	<script>
		CKEDITOR.replace( 'content',{height: 500});
	</script>
@stop