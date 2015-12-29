<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PlatziLaravel\Http\Requests;

class AuthController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		if(Auth::check())
			return redirect('/');
		return view('auth');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){

		$this->validate($request,[
			'username' => 'required|email',
			'password' => 'required'
		]);

		$params = $request->only(['username','password']);

		if(!Auth::attempt(['email'=>$params['username'],'password'=>$params['password']]) )
			return redirect()->route('auth_show_path')->withInput(['username'=>$request->input('username')])
				->withErrors('usuario y/o contraseña incorrecta');

		return redirect()->intended('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy() {
		//Auth::logout();
		auth()->logout();
		return redirect()->route('auth_show_path');
	}
}
