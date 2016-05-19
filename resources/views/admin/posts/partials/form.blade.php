<form method="POST" action="{{ url( isset($post) ? "admin/posts/$post->id" : "admin/posts")}}">
	{!! csrf_field() !!}
	@if(isset($post))
		<input name="_method" type="hidden" value="PUT">
	@endif
	<div class="ibox">
		<div class="ibox-title">
			<h5>Settings</h5>
			<div class="ibox-tools">
			    <a class="collapse-link">
			        <i class="fa fa-chevron-up"></i>
			    </a>
			</div>
		</div>
		<div class="ibox-content">
			<div class="form-group">
				<label class="font-noraml">Title</label>
				<input class="form-control" type="text" name="title" placeholder="Post Title" value="{{ $post->title or old('title') }}">
			</div>
			<div class="row">
				
				<div class="col-lg-6">
					<div class="form-group">
						<label class="font-noraml">Publish On</label>
						<div class="input-group date">
			                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			                	<input type="text" class="form-control" value="{{ isset($post->publish_on) ?  $post->publish_on->format('d-m-Y') :  old('publish_on')   }}" name="publish_on">
			            </div>
					</div>
				</div>
				<div class="col-lg-6">
					<label class="font-noraml" style="margin-top: 28px;">
						{!! Form::checkbox('published', '1', isset($post->published) ? $post->published : old('publish_on'),['class'=>'i-checks'] ) !!}
						Publish
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label class="font-noraml">Post Type</label>
						{!! Form::select('post_type_id', $postTypes->lists('name', 'id'), isset($post->post_type_id) ? $post->post_type_id : old('post_type_id'), ['class'=>'form-control']); !!}				
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="font-noraml">Tags</label>
						<select class="form-control" id="tags" name="tags[]" multiple="multiple">
							@if(isset($post))
								@foreach($post->tags as $tag)
									<option value="{{ $tag->name }}" selected>{{ $tag->name }}</option>
								@endforeach
							@elseif(old('tags'))
								@foreach(old('tags') as $tag)
									<option value="{{ $tag }}" selected>{{ $tag }}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="ibox post-media">
		<div class="ibox-title">
			<h5>Media</h5>
			<div class="ibox-tools">
			    <a class="collapse-link">
			        <i class="fa fa-chevron-up"></i>
			    </a>
			</div>
		</div>
		<div class="ibox-content">

		</div>
	</div>
	<div class="ibox post-body">
		<div class="ibox-title">
			<h5>Content</h5>
			<div class="ibox-tools">
			    <a class="collapse-link">
			        <i class="fa fa-chevron-up"></i>
			    </a>
			</div>
		</div>
		<div class="ibox-content no-padding">
			<div class="form-group">
				<textarea class="form-control summernote" name="body">{{  $post->body or old('body') }}</textarea>
			</div>
		</div>
	</div>

	<div class="ibox post-body">
		<div class="text-right">
			<button class="btn btn-primary" type="submit">Save</button>
		</div>
	</div>
</form>