@extends('layouts.main')

@section('title')
	Login
@stop


@section('content')
	<div class="ui page grid content">  
		<div class="column container" id="login-container">
			<h2 class="header">Login</h2>

			@if ($errors->has())
				<div class="ui error message">
					@foreach ($errors->all() as $error)
					    <div>{{ $error }}</div>
					@endforeach
				</div>			
			@endif
			
			<form class="ui form" method="post" action="{{ route('home.login') }}">
				<div class="field">
					<label>Username</label>
					<div class="ui input">
						<input type="text" placeholder="Username" name="username" value="{{Input::old('username')}}">
					</div>
				</div>
				<div class="field">
					<label>Password</label>
					<div class="ui input">
						<input type="password" placeholder="Password" name="password">
					</div>
				</div>
				<div class="submit-field">
					<input type="submit" value="Login" class="ui blue button">
					
				</div>
				
				
			</form>
		</div>
	</div>
@stop