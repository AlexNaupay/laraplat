<?php

use Illuminate\Database\Seeder;
use PlatziLaravel\Models\Post;
use PlatziLaravel\User;

class PostsCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
	    //User::truncate();
	    if(Post::all()->count()>100){
		    Post::truncate();
	    }

        /*
         * factory(User::class,10)->create()->each(function($user){
	        $post = factory(Post::class)
		        ->make(['author_id'=>$user->id]);

            $user->posts()->save($post);
        });
        */
	    $users = User::all();

	    for( $i=0; $i<100; $i++){
		    factory(Post::class)->create(['author_id'=>$users->random()->id]);
	    }


    }
}
