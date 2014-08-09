@extends('layouts.default')

@section('title')
	Login
@stop


@section('content') 
	<div class="row" id="login-container">
		<div class="medium-6 columns small-centered">
			<h2 class="">Login</h2>

			@if ($errors->has())
				@foreach ($errors->all() as $error)
					<div class="alert-box alert">
						{{ $error }}
						<a href="#" class="close">&times;</a>
					</div>	
				@endforeach		
			@endif
			
			<form method="post" action="{{ route('home.login') }}">
				<div class="row">
					<div class="medium-8 columns">
						<label>Username
							<input type="text" placeholder="Username" name="username" value="{{Input::old('username')}}">
						</label>
					</div>
				</div>
				
				<div class="row">
					<div class="medium-8 columns">
						<label>Password
							<input type="password" placeholder="Password" name="password">
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 large-center columns">
						<input type="submit" value="Login" class="button">
					</div>
				</div>

				
			</form>
		</div>
	</div>
@stop