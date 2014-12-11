@extends('layouts.main')

@section('title')
	About
@stop

@section('content')
	@if(Auth::check())
		<div class="row">
			<div class="large-12 columns">
				<dl class="sub-nav">
					<dd class="active"><a href="{{route('about.index')}}">View</a></dd>
					<dd><a href="{{route('about.edit')}}">Edit</a></dd>
				</dl>
			</div>
		</div>
	@endif
	<div class="row">
	   	<div class="content large-12 columns">
		    <div class="last-updated">
     			<h5><small>Updated {{HelperFunction::timeAgo($page->updated_at)}}</small></h5>
     		</div>
	     	{{empty($page)?'':$page->content}}
	   	</div>
	   	<div class="sidebar large-3 columns">
	</div>

	
@stop