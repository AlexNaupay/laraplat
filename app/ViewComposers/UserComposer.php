<?php

namespace PlatziLaravel\ViewComposers;

use Illuminate\View\View;

class UserComposer {


	public function compose(View $view){

		$view->with('userCurrent', auth()->user() );

	}

}