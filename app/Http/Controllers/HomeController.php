<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Http\Request;

use PlatziLaravel\Http\Requests;
use PlatziLaravel\Http\Controllers\Controller;

class HomeController extends Controller {

	public function index(){
		return view('home');
	}
}
