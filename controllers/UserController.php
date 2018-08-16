<?php

namespace Controllers;

use Models\Model_Users as Model_Users;

class UserController
{
	public static function register($name)
	{
      Model_Users::register($name);
	}

}
