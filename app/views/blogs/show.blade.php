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
				<h3>{{HTML::linkRoute('blog.show', $blog->title,$blog->id)}}</h3>
				<div class="row">
					@if($blog->image!='')
						<img src="{{$blog->image}}"/>
					@endif
					<div class="large-12 columns">
						{{$blog->body}}
					</div>
							
				</div>
			</article>
			<hr>
	   	</div>
	</div>
	<div class="row">
		<div class="columns large-11 large-centered">

		@foreach($blog->comment as $blogComment)
			<div class="comment">
				<div class="row">
					<div class="columns small-9">
						<h5>{{$blogComment->comment->author}}</h5>
					</div>
					<div class="columns small-3">
						{{$blogComment->comment->updated_at}}
					</div>
				</div>
				<div class="row">
					<div class="columns large-12">
						{{$blogComment->comment->comment}}
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
		{{ Form::open(array('route'=>'blog.store_comment', 'class'=>'ui form fluid basic accordion')) }}
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
					{{ Form::submit('Comment', array('class'=>'button')) }}	
				</div>
			</div> 
					
		{{ Form::close() }}

		</div>
	</div>
	</div>
<?php /*
	<!-- TODO: IMPLEMENT COMMENT FEATURE -->
	<!--div class=" ui grid page-comments">
		@foreach ($blog_comments as $blog_comment)
			<div class="ui thirteen wide column comment">
				<div class="ui two column grid">
					<div class="ui two wide column profile-pic">
						<img class="circular ui image" src="{{URL::to('/').'/images/profile-pic.png'}}">
					</div>
					<div class="ui fourteen wide column comment-content">
						<div class="ui two column grid head">
							<div class="fifteen wide column">
								<h3 class="ui header">{{$blog_comment->comment->user_name}}</h3>
							</div>
							<div class="ui right floated one  wide column">
								<i class="forward mail link icon"></i>					
							</div>
						</div>
						<div class="body">
							<p>
								{{$blog_comment->comment->comment}}
							</p>
						</div>					
					</div>
				</div>
				@foreach($blog_comment->comment->replyComments as $reply_comment)
				<div class="reply-comment">

					<div class="ui two column grid">
						<div class="ui two wide column profile-pic">
							<img class="circular ui image" src="{{URL::to('/').'/images/profile-pic.png'}}">
						</div>
						<div class="ui thirteen wide column comment-content">
							<div class="head">
								<div class="fifteen wide column">
									<h4 class="ui header"> {{$reply_comment->comment->user_name}}</h4>
								</div>
							</div>
							<div class="body">
								<p>{{$reply_comment->comment->comment}}</p>
							</div>					
						</div>
					</div>
					
				</div>
				@endforeach
				<div class="ui fluid basic accordion">
					<div class="title" style="display:none">
						
					</div>
					<div class="content" >
						{{ Form::open(array('route'=>'blog.store_reply_comment', 'class'=>'ui form')) }}
							<div class="field">
								<h5 class="ui header">Display Name</h5></label>
								{{ Form::text('user-name', 'Anonymous User') }}
							</div>
							<div class="field">
								<label><h5 class="ui header">Comment</h5></label>
								{{ Form::textarea('reply-comment') }}
							</div>	
							{{ Form::hidden('blog-id', $blog->id) }}
							{{ Form::hidden('comment-id', $blog_comment->comment->id) }}


						{{ Form::close() }}
					</div>
					<script type="text/javascript">
						$("textarea[name='reply-comment']").keypress(function(e){
							var key = e.which;
							if(key==13)
							{
								$(e.target.offsetParent).submit();
							}
						});
					</script>
				</div>
			</div>	
		@endforeach
		
		<div class="ui thirteen wide column new-blog-comment comment">
			{{ Form::open(array('route'=>'blog.store_comment', 'class'=>'ui form fluid basic accordion')) }}
				<div class="title ui header">
					<i class="icon dropdown"></i>
					Write Comment
				</div>
				<div class="content">
					<div class="field">
						{{ Form::label('Name Displayed') }}
						{{ Form::text('user-name', 'Anonymous User') }}
					</div>
					<div class="field">
						{{ Form::label("Comment") }}
						{{ Form::textarea("blog-comment") }}
					</div>
					{{ Form::hidden('blog-id',$blog->id) }}
					{{ Form::submit('Save', array('class'=>'ui green button')) }}
				</div>				
			{{ Form::close() }}
		</div>
	</div-->?*/?>
@stop
