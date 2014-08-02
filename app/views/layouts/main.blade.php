<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
		{{HTML::style('css/semantic.min.css')}}
		{{HTML::style('css/main.scss.min.css')}}
		{{HTML::script('js/jquery-1.11.0.min.js')}}
		{{HTML::script('js/semantic.js')}}
		{{HTML::script('ckeditor/ckeditor.js')}}
		{{HTML::script('js/main.min.js')}}
		<head>
  </head>
	</head>

	<body>
		@if(!empty($navbar))		
			<div class="navbar inverted ui menu page grid">
				<div class="ui twelve wide column">
				@foreach ($navbar as $name =>$active)
					<a class="item {{$active}}" href="{{ route($name.'.index') }}">
						{{ucfirst($name)}}
					</a>
				@endforeach
				</div>
			</div>
		@endif 
		<div class="wrapper">
	             		
		@yield('content')	        			            
	        
	        
	    <div class="push"></div>
        <div class="page-footer ui one column center aligned page grid">
        	<div class="contact-info column">
	        	<p>
	        		Created by Warren Clough <br/>
	        		Follow me @ <a href="https://github.com/clough">Github</a>
	        		<br/>
	        		Source for this website can be found @ <a>My Blog</a>
	        	</p>
        	</div>
        </div>
        </div>
    </body>
</html>
