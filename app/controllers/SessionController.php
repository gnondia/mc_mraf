<?php
	
	class SessionController extends BaseController {
		public function handleRegister()
	{
		$registerData = Input::all();
		$registerRules = array(
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8',
			'cpassword' => 'required|min:8',
			);
		$registerValidator = Validator::make($registerData,$registerRules);
		if( $registerValidator->passes())
		{
			$user = new User();
			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->cpassword = Hash::make(Input::get('password'));
			//$user->activation_key = bin2hex(openssl_random_pseudo_bytes(16));
			$user->save();
			// send activation link
			/*$mailData = array(
				'name'=> Input::get('name'),
				'link'=> $user->activation_key
				);
			Mail::send('emails.activate',$mailData, 
				function($message)
				{
					$message->subject("nukeboard.co account activation");
					$message->to(Input::get('email'));
				}
			);*/
			return Redirect::to('/login')->with('alertMessage',"Account Created Successfully, Login");
		}
		if($registerValidator->fails())
		{
			return Redirect::back()->withInput()->withErrors($registerValidator);
		}
	}
}