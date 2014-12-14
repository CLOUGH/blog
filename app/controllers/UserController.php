<?php

class UserController extends \BaseController {


	public function updateUserPassword()
	{
		$user = User::find(Auth::user()->id); 
		$input_data = Input::all();
		$password_data = array(
			'current_password' => Input::get('current_password'),
			'new_password' => Input::get('new_password'),
			'confirm_password' => Input::get('confirm_password')
		);
		$result =  $user->validateNewPassword($password_data);

		if($result["error"])
		{
			Session::flash('password_validation_error', $result['message']);			
		}
		else
		{
			$result = $user->updateUserPassword($password_data['new_password']);
			Session::flash('update_password_success', $result);
		}

		return Redirect::route('dashboard.index');
	}
}

?>