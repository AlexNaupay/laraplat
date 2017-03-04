<?php

namespace PlatziLaravel\Http\Controllers;

use PlatziLaravel\Http\Requests;
use PlatziLaravel\Models\Post;

class HomeController extends Controller {

	public function index(){
		return redirect()->route('post_index_path');
	}
}
