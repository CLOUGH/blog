<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
		{{HTML::style('css/semantic.min.css')}}
		{{HTML::style('css/main-style.css')}}
		{{HTML::script('js/jquery-1.11.0.min.js')}}
		{{HTML::script('js/semantic.min.js')}}
	</head>

	<body>
		<div class="wrapper">
			<div class="page-header">
		    	<div class="ui one column stackable left aligned page grid">
		    		<nav class="ui purple inverted menu">
		    			<div class="right menu">	    				
			        		@yield('nav-bar')
		    			</div>
					</nav>
		        </div>
	        </div>
	        <div class="banner">
	        </div>
	        <div class="ui grid page">
	        	<div class="column">
		        		
		        	@yield('content')
	        	</div>		            
	        </div>
	        <div class="footer">
	        	
	        </div>

	    </div>
    </body>
</html>
