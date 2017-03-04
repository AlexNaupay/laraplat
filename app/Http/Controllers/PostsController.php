<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Contracts\Queue\EntityNotFoundException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PlatziLaravel\Http\Requests;
use PlatziLaravel\Models\Post;

class PostsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//Eager loading ...
		//$posts = Post::with('author')->get();
		$posts = Post::with('author')->paginate(10);
        // devAuthor();
		//$posts = Post::paginate(10);

		//$posts->setPath('/usrssss/alexh');

		return view('post.list_all',['posts'=>$posts]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('post.post_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'slug' => 'required|unique:posts',
			'body' => 'required',
		]);
		if($validator->fails()){
			return redirect()->route('post_create_path')->withErrors($validator)->withInput();
		}

		//Post::create($request->input());
		Post::create([
			'title'=>$request->get('title'),
			'slug'=>$request->get('slug'),
			'body'=>$request->get('body'),
			'author_id'=>Auth::user()->id,
		]);

		return redirect()->route('post_show_path',$request->get('slug'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug) {
		$post = Post::where('slug', $slug)->first();

		if(empty($post))
			throw new EntityNotFoundException("Error ...",$slug);
		return view('post.post_detail', ['post' => $post]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$post = Post::findOrFail($id);
		return view('post.post_edit',['post'=>$post]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$post = Post::findOrFail($id);

		$this->validate($request,[
			'title' => 'required|max:255',
			'slug' => 'required|unique:posts,slug,'.$id,
			'body' => 'required',
		]);

		$post->title = $request->get('title');
		$post->slug = $request->get('slug');
		$post->body = $request->get('body');

		$post->save();

		return redirect()->route('post_show_path',$post->slug);
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//$post = Post::findOrFail($id);
		//$post->destroy();
		Post::destroy($id);
		return redirect()->route('post_index_path');
	}
}
