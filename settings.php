<?php

use \RedBeanPHP\R as R;

R::setup( 'mysql:host=localhost;dbname=showcode', 'root', '' );
Flight::set('flight.views.path', '../views');