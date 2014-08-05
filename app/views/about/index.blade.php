@extends('layouts.main')

@section('title')
	Home
@stop
@section('banner-img')
	<img src="{{URL::asset('')}}images/about_img_copy.jpg">
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
		        
	     	{{empty($page)?'':$page->content}}
	   	</div>
	   	<div class="sidebar large-3 columns">
	</div>

	
@stop