<?php


/*
|--------------------------------------------------------------------------
| Default Routing
|--------------------------------------------------------------------------
*/

Route::any('(:bundle)/?(:any)?/?(:num)?', function($action = 'index', $steps = 0) {
	return Controller::call("installer::installer@{$action}", array($steps));
});

Route::any('/', array(
	'before' => 'installer::installed',
	function() {
		return Controller::call(Controller::detect());
	}
));

/*
|--------------------------------------------------------------------------
| Route Filtering
|--------------------------------------------------------------------------
*/

Route::filter('installer::installed', function ()
{
	// we should run installer when the system detect it's already running
	// or installed.
	if ( ! Installer::installed())
	{
		return Redirect::to_action("install");
	}
});