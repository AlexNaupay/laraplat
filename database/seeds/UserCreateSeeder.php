<?php

use Illuminate\Database\Seeder;

class UserCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
	    if(\PlatziLaravel\User::all()->count()<20){
            factory(\PlatziLaravel\User::class,20)->create();
            factory(\PlatziLaravel\User::class,'alexh',1)->create();

        }
    }
}
