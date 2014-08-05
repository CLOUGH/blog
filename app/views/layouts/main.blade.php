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
		<div class="row">
	   <div class="medium-3 columns">
	      <h1><img src="{{URL::asset('')}}images/Site Logo.png"></h1>
	   </div>
	   	<div class="medium-9 columns">
	      <ul class="button-group right">
			@foreach ($navbar as $name =>$active)
				<li>
					<a class="button" href="{{ route($name.'.index') }}">{{ucfirst($name)}}</a>
				</li>
			@endforeach
			@if(Auth::check())
				<li>
					<a class="button" href="{{route('home.logout')}}">Logout</a>
				</li>
			@endif
	      </ul>
	   	</div>
	   	<div class="row">
		   <div class="large-12 columns banner">
		   		@yield('banner-img')
		      
		      <hr>
		   </div>
		</div>
		</div>
		@yield('content')
		<footer class="row">
		   <div class="large-12 columns">
		      <hr/>
		      <div class="row">
		         <div class="small-6 columns">
		            <p>© Copyright</p>
		         </div>
		         <div class="small-6 columns">
		            <ul class="inline-list right">
		               <li><a href="https://github.com/clough"><img src="{{URL::asset('')}}images/github.png">Github</a></li>
		               <li><a href="mailto:clough.warren@gmail.com"><img src="{{URL::asset('')}}images/gmail.png">Gmail</a></li>
		               <!--li><a href="http://laravel.com"><img src="images/laravel.png"></a></li>
		               <li><a href="http://laravel.com"><img src="images/foundation.png"></a></li-->
		            </ul>
		         </div>
		      </div>
		   </div>
		</footer>
    </body>
</html>
