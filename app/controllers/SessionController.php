<?php
	
class SessionController extends BaseController {
	public function handleRegister()
	{
		$registerData = Input::all();
		$registerRules = array(
			'name' => 'required',
			'sname' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8',
			'cpassword' => 'required|min:8',
			);
		$registerValidator = Validator::make($registerData,$registerRules);

		if(User::where('email', '=', Input::get('email'))->first() == Input::get('email')) {
			Redirect::to('/register')->with('alertError', "Account already exist");
		}

		if( $registerValidator->passes())
		{
			$user = new User();
			$user->name = Input::get('name');
			$user->sname = Input::get('sname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->cpassword = Hash::make(Input::get('cpassword'));
			$user->activation_key = bin2hex(openssl_random_pseudo_bytes(16));
			$user->save();
			// send activation link
			/*$mailData = array(
				'name'=> Input::get('name'),
				'link'=> $user->activation_key
				);
			Mail::send('emails.activate',$mailData, 
				function($message)
				{
					$message->subject("efarm account activation");
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

	public function handleLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    //  check if account is active
		    /*if(Auth::user()->activation_state == "off")
		    {
		    	Auth::logout();
		    	return Redirect::back()->with('alertError', "please check your mail to activate account");
		    }*/

			// log the user into the site
		    return Redirect::to('/');
		}
		else 
		{
			return Redirect::back()->with('alertError', "Invalid account details or Account doesn't exist");
		}
	}
}