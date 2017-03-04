<?php

namespace PlatziLaravel\Providers;


use Illuminate\Support\ServiceProvider;
use PlatziLaravel\ViewComposers\UserComposer;

class ComposerServiceProvider extends ServiceProvider{


	public function boot(){
		view()->composer(
			'*', UserComposer::class // * = Share to with all views
		);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		// TODO: Implement register() method.
	}
}