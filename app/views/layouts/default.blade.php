<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			@yield('title')
		</title>
		{{HTML::style('foundation5/css/normalize.css')}}
		{{HTML::style('foundation5/css/foundation.css')}}
		{{HTML::style('css/main.scss.min.css')}}

		{{HTML::script('foundation5/js/vendor/modernizr.js')}}
	</head>

	<body>

		
        
        {{HTML::script('foundation5/js/vendor/jquery.js')}}
        {{HTML::script('foundation5/js/foundation.min.js')}}
        {{HTML::script('ckeditor/ckeditor.js')}}
		{{HTML::script('js/main.min.js')}}
		@yield('content')
    </body>
</html>
