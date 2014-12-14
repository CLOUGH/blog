<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public function validateNewPassword($password_data)
	{
		//check if the password sent is not empty
		if(strlen($password_data['current_password'])==0 ||strlen($password_data['new_password'])<=0  )
		{
			return array("error"=>true,"message"=>"The password lenght must be grater than 0.");
		}

		//The current password does not match the one in the database for the current user
		if(!Hash::check($password_data['current_password'],$this->password))
			return array("error"=>true,"message"=>"The current password entered is incorrect.");

		//The confirm password did not match 
		if($password_data['new_password']!=$password_data['confirm_password'])
			return array("error"=>true,"message"=>"The password did not match.");

		//The password is the same as the old
		if(Hash::check($password_data['new_password'],$this->password))
			return array("error"=>true,"message"=>"The new password entered is the same as the current password.");

		return array('error'=>false,'message'=>'The password entered is valid.');

	}
	public function updateUserPassword($password)
	{
		$result = array();
		try {
			$this->password = Hash::make($password);
			$this->save();

			$result=array('error'=>false,'message'=>'The password was updated succesfully.');
		}catch(Exception $e)
		{
			$result=array('error'=>true,'message'=>'An error occured while trying to update password.');
		}
		return $result;
	}

}