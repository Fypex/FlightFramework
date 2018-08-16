<?php 

namespace Models;

use \RedBeanPHP\R as R;
use \RedBeanPHP\SimpleModel as S;

class Model_Users extends S
{
	public static function register($name)
	{
	  $users = R::dispense('users');
      $users->name = $name;
      R::store($users);
	}
}
