<div class="ui inverted green small menu edit-bar">
	<div class="left menu">
		{{var_dump($active_views)}}
		<a class="item {{$active_views['edit-bar']['show']}}" href="{{route('blogs.show',$blog->id)}}">View</a>
		<a  class="ui item {{$active_views['edit-bar']['edit']}}" href="{{route('blogs.edit',$blog->id)}}">
			<i class="edit icon"></i>
			Edit
		</a>
		<a class="item" id="delete" href="#">Delete</a>
	</div>
</div>

<div class="ui small basic modal" id="delete-modal">
	<i class="close icon" style="color:white"></i>
		<div class="content">
			Are you sure you want to delete this item.
			
		</div>
		<div class="actions">
			{{ Form::open(array('blogs','method'=>'delete')) }}
			<div class="two fluid ui buttons">				
				<input type="button" class="ui negative right labeled icon button" value="No">				
				<input type="submit" class="ui positive labeled icon button" value="Yes">				
			</div>
			{{ Form::close() }}
	  	</div>
	  
</div>

<script type="text/javascript">
	$('#delete').click(function (event) {

		$('.ui.modal#delete-modal').modal('setting', 'closable', false).modal('show');
	});
</script>