<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Generic parent for all admin controllers in Bliss Engine
 *
 * Author: Anders Dahlgren <anders@bobolo.se>
 * Created On: 2013-01-06
 */
class Controller_Admin extends Controller_Base {
	public function before()
	{
		parent::before();

		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('user/login');
		}
	}
}
