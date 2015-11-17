<?php
	
class ActivitiesController extends BaseController {

	//this handles posting of message(contacts) to the database
	public function sendMessage(){
		$contactData = Input::all();
		$contactRules = array(
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
			);
		$contactValidator = Validator::make($contactData,$contactRules);
		if( $contactValidator->passes())
		{
			$contact = new Contact();
			$contact->name = Input::get('name');
			$contact->email = Input::get('email');
			$contact->url = Input::get('url');
			$contact->subject = Input::get('subject');
			$contact->message = Input::get('message');
			$contact->save();
			
			return Redirect::to('/contact')->with('alertMessage',"Message Sent Successfully, We shall get back to you soon!!");
		}
		if($contactValidator->fails())
		{
			return Redirect::back()->withInput()->withErrors($contactValidator);
		}
	}

	//other controller methods will go here....

}