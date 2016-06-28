<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex()
	{
		#process variable data or params
		#talk to the model
		#recieve from the model
		#comple or process data from the model if needed
		#pass that data to the correct view
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages/welcome')->with('Posts',$posts);
	}

	public function getAbout()
	{
		#pages/about OR pages.about to find the about.blade.php

		$first = "Ronald";
		$last  = "Torres";

		$fullname = $first . " " . $last;
		$email = "torresronald22@yahoo.com";

		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

		return view('pages/about')->with("data", $data);

		#->with("fullname", $fullname) ->with("email", $email);

		#"fullname" - variable to use in about.blade.php

	}

	public function getContact()
	{
		return view('pages/contact');

	}


}