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
		{{HTML::script('ckeditor/ckeditor.js')}}
	</head>

	<body>
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="#">Warren Clough Site</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section --> 
				<ul class="right">
					@foreach ($navbar as $name =>$active)
						<li class="{{$active}}"><a href="{{ route($name.'.index') }}">{{ucfirst($name)}}</a>	</li>
					@endforeach
					@if(Auth::check())
						<li class="has-dropdown">
							<a href="#">Admin</a> 
							<ul class="dropdown">
								<li><a class="button" href="{{route('home.logout')}}">Logout</a></li>
								<li><a href="#">Setup</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</section>
		</nav>
		<br>
		<div class="row">
			<div class="large-12 columns ">
				<h2>
					@yield('title')
				</h2>
			</div>
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
		               <li><a href="https://github.com/clough"><img src="{{URL::asset('')}}images/github.png"></a></li>
		               <li><a href="mailto:clough.warren@gmail.com"><img src="{{URL::asset('')}}images/gmail.png"></a></li>
		               <li><a href="http://twitter.com/warren_clough"><img src="{{URL::asset('')}}images/twitter.png" style="height: 40px;"></a></li>
		               <!--li><a href="http://laravel.com"><img src="images/laravel.png"></a></li>
		               <li><a href="http://laravel.com"><img src="images/foundation.png"></a></li-->
		            </ul>
		         </div>
		      </div>
		   </div>
		</footer>
		{{HTML::script('foundation5/js/vendor/jquery.js')}}
        {{HTML::script('foundation5/js/foundation.min.js')}}
        {{HTML::script('js/foundation/foundation.topbar.js')}}
        
		{{HTML::script('js/main.min.js')}}
		<script type="text/javascript">
			$(document).foundation();
		</script>
    </body>
</html>
