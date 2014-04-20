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
		
		<div class="ui thirteen wide column comment">
			<div class="ui two column grid">
				<div class="ui two wide column profile-pic">
					<img class="circular ui image" src="http://www.americommerce.com/resize?po=http%3A%2F%2Fwww.gravatar.com%2Favatar%2F6743d170a942b3ffab4e46b4f3391df6%3Fs%3D161%26d%3Dhttp%253a%252f%252fwww.americommerce.com%252fstore%252fi%252fuser_icon.png&lr=t&bw=160&w=160">
				</div>
				<div class="ui fourteen wide column comment-content">
					<div class="ui two column grid head">
						<div class="fifteen wide column">
							<h3 class="ui header"> Anonymous User</h3>
						</div>
						<div class="ui right floated one  wide column">
							<i class="forward mail link icon"></i>					
						</div>
					</div>
					<div class="body">
						<p>
							Oversized sweatshirt rings sneaker ribbed Jil Sander Vasari black Weekday vintage relaxed. Neutral cotton strong eyebrows skinny jeans Maison Martin Margiela statement Céline Luggage crop grunge leather tote. Seam knot ponytail tee envelope clutch mint white center part Lanvin tucked t-shirt. Knitwear indigo Furla Acne Céline backpack.
						</p>
					</div>					
				</div>
			</div>
			<div class="reply-comment">
				<div class="ui two column grid">
					<div class="ui two wide column profile-pic">
						<img class="circular ui image" src="http://www.americommerce.com/resize?po=http%3A%2F%2Fwww.gravatar.com%2Favatar%2F6743d170a942b3ffab4e46b4f3391df6%3Fs%3D161%26d%3Dhttp%253a%252f%252fwww.americommerce.com%252fstore%252fi%252fuser_icon.png&lr=t&bw=160&w=160">
					</div>
					<div class="ui thirteen wide column comment-content">
						<div class="head">
							<div class="fifteen wide column">
								<h4 class="ui header"> Anonymous User</h4>
							</div>
						</div>
						<div class="body">
							<p>
								Oversized sweatshirt rings sneaker ribbed Jil Sander Vasari black Weekday vintage relaxed. Neutral cotton strong eyebrows skinny jeans Maison Martin Margiela statement Céline Luggage crop grunge leather tote. 
							</p>
						</div>					
					</div>
				</div>
				
			</div>
			<div class="ui fluid basic accordion">
				<div class="title" style="display:none">
					
				</div>
				<div class="content" >
					
					<form class="ui form">
						<div class="field">
							<label><h5 class="ui header">Comment</h5></label>
							<textarea></textarea>
						</div>						
					</form>
				</div>
			</div>
		</div>
		<div class="ui thirteen wide column new-blog-comment comment">
			<form class="ui form fluid basic accordion">
				<div class="title ui header">
					<i class="icon dropdown"></i>
					Write Comment
				</div>
				<div class="content">
					<div class="field">
						<label>Name Displayed</label>
						<input type="text">
					</div>
					<div class="field">
						<label>Comment</label>
						<textarea></textarea>
					</div>		
				</div>
				
				
			</form>
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
