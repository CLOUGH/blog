@extends('layouts.master')

@section('title')
	{{$blog->title}}
@stop

@section('nav-bar')
	@include('layouts.navbar',array($navbar))
@stop

@section('content')
	<div class="ui grid page-main-content">
		

		<div class="ui one wide column">	
		</div>
		
		<div class="ui fourteen wide column content-area">
		@include('blogs.edit-bar', array('active_views'=>$active_views,'blog'=>$blog))
			<div class="content">
				<h2 class="ui header">{{$blog->title}}</h2>
				<div class="blog-body">
					{{$blog->body}}
				</div>
			</div>
		</div>	

		<div class="ui one wide column">
		</div>
	</div>
	<div class=" ui grid page-comments">
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
		<script type="text/javascript">
			$('.ui.accordion').accordion();
			$(".comment .comment-content .head  i").click(function(e){
				var my_accordion = $(e.target).closest('.comment').find('.accordion .title');
				my_accordion.trigger('click');
			});
		</script>
	</div>
@stop
