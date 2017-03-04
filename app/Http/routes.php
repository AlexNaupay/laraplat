<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
	// Add your routes here
	Route::get('/auth',['uses'=>'AuthController@index','as'=>'auth_show_path']);
	Route::post('/auth',['uses'=>'AuthController@store','as'=>'auth_store_path']);

});

Route::group(['middleware'=>['web','auth']], function(){

	Route::get('/','HomeController@index'); // home

	/* routes for posts */
	Route::get('/posts/create',['uses'=>'PostsController@create', 'as'=>'post_create_path']);
	Route::post('/posts',['uses'=>'PostsController@store','as'=>'post_store_path']);


	Route::get('/posts',['uses'=>'PostsController@index','as'=>'post_index_path']);
	Route::get('/posts/{slug}',[
		'uses' => 'PostsController@show',
		'as' => 'post_show_path'
	])/*->where('slug','expresion_regular')*/;

	Route::get('/posts/edit/{id}',['uses'=>'PostsController@edit', 'as'=>'post_edit_path']);
	Route::put('/posts/{id}',[
		'uses'=>'PostsController@update','as'=>'post_update_path'
	])->where('id','[0-9]+');

	Route::get('/posts/remove/{id}',['uses'=>'PostsController@destroy', 'as'=>'post_remove_path']);

	/* routes for auth */
	Route::get('/logout', ['uses'=>'AuthController@destroy', 'as'=>'auth_destroy_path']);
});

