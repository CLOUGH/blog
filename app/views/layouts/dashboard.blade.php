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
		{{HTML::style('css/dashboard.css')}}
		{{HTML::style('foundation5/css/foundation.css')}}
		{{HTML::style('foundation5/icons/foundation-icons.css')}}
		{{HTML::script('foundation5/js/vendor/modernizr.js')}}
		{{HTML::script('ckeditor/ckeditor.js')}}
		
	</head>

	<body>
		<nav class="top-bar main-nav" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="#">MY SITE</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone --> 
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<!-- Right Nav Section --> 
				<ul class="right">
					@foreach ($navbar as $name =>$active)
						<li><a href="{{ route($name.'.index') }}">{{strtoupper($name)}}</a></li>
					@endforeach
					@if(Auth::check())
						<li class="active"><a href="{{route('dashboard.index')}}">DASHBOARD</a></li>
						<li><a href="{{route('home.logout')}}"><i class="fi-power"></i> LOGOUT</a></li>
					@endif
				</ul>
			</section>
		</nav>
		<div>
			<div class="columns medium-2 navigation-sidebar">
				<dl class="tabs vertical" data-tab>
					<dd>
						<a href="#pages-settings">
							<span class="icon"></span>
							<span class="title">PAGES</span>
						</a>
					</dd>
					<dd class="active">
						<a href="#user-settings">
							<span class="icon"><i class="fi-torsos-all medium"> </i></span>
							<span class="title">USER</span>
						</a>
					</dd>
					<dd>						
						<a href="#social-settings">
							<span class="icon"></span>
							<span class="title">SOCIAL</span>
						</a>
					</dd>
				</dl>
			</div>
			<div class="columns medium-10 main-content">
				<div class="tabs-content vertical">
					<!-- User Settings -->
					<div class="content active" id="user-settings">
						<form class="columns small-8" method="POST" action="{{route('user.updateUserPassword')}}">
							<fieldset class="">
    							<legend><h4>Change Password</h4></legend>
    							@if (Session::has('password_validation_error')) 
	    							<div class="row">
	    								<div class="columns  small-12">
	    									<small class="error">{{Session::get('password_validation_error')}}</small>
	    								</div>
	    							</div>
    							@endif
    							@if(Session::has('update_password_success'))
    								<div class="row">
    									<div class="row">
    										<div class="columns small-12">
    											<?php $result = Session::get('update_password_success');?>
    											<small class="alert-box {{$result['error']==true ?  'error' : 'success'}}">
    												{{$result['message']}}
    											</small>
    										</div>
    									</div>
    								</div>
    							@endif
    							
								<div class="row">
									<div class="columns small-12">
										<label>Current Password
										    <input type="password" name="current_password" />
										</label>
									</div>
								</div>
								<div class="row">
									<div class="columns small-12">
										<label>New Password
										    <input type="password" name="new_password"/>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="columns small-12">
										<label>Confirm Password
										    <input type="password" name="confirm_password"/>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="columns small-12 clearfix">
										<input type="submit" class="button small right" value="Submit">
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<!-- Pages  Settings -->
					<div class="content" id="pages-settings">
						<p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
					</div>
					<!-- Social  -->
					<div class="content" id="social-settings">
						<p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
					</div>
				</div>
			</div>
		</div>

		

		{{HTML::script('foundation5/js/vendor/jquery.js')}}
        {{HTML::script('foundation5/js/foundation.min.js')}}
        {{HTML::script('js/foundation/foundation.topbar.js')}}        
		{{HTML::script('js/main.min.js')}}
		<script type="text/javascript">
			$(document).foundation();
		</script>
    </body>
</html>
