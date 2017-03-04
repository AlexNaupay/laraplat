<?php

namespace PlatziLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // echo AppServiceProvider::class." boot()";
        //view()->share('userCurrent',auth()->user());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    //$this->app->singleton('alexh', function($app){return new User();});
	    // echo AppServiceProvider::class." register()";
    }
}
