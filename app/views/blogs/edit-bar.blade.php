<div class="ui inverted green small menu edit-bar">
	<div class="left menu">
		{{var_dump($active_views)}}
		<a class="item {{$active_views['edit-bar']['show']}}" href="{{route('blogs.show',$blog->id)}}">View</a>
		<a  class="ui item {{$active_views['edit-bar']['edit']}}" href="{{route('blogs.edit',$blog->id)}}">
			<i class="edit icon"></i>
			Edit
		</a>
		<a class="item" >Delete</a>
	</div>
</div>