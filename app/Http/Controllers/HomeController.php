<?php

namespace PlatziLaravel\Http\Controllers;

use PlatziLaravel\Http\Requests;
use PlatziLaravel\Models\Post;

class HomeController extends Controller {

	public function index(){
		//Eager loading ...
		$posts = Post::with('author')->get();

		return view('home',['posts'=>$posts]);
	}
}
