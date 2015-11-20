<?php
	
class BlogController extends BaseController {
	
	public function postBlog(){
		$blogData = Input::all();
		$blogRules = array(
			'name' => 'required',
			'title' => 'required|min:20',
			'content' => 'required',
			);
		$blogValidator = Validator::make($blogData,$blogRules);

		if( $blogValidator->passes())
		{
			$blog = new Blog();
			$blog->blog_owner = Input::get('name');
			$blog->title = Input::get('title');
			$blog->content = Input::get('content');
			$blog->date = date('Y M D');
			$blog->save();

			return Redirect::to('/blogs')->with('alertMessage',"Blog posted successfully!!!");
		}
		if($registerValidator->fails())
		{
			return Redirect::back()->withInput()->withErrors($blogValidator);
		}
	}

}