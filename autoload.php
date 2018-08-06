<?php

spl_autoload_register(function ($class) {


	$text = $class;

	$text = substr($text, -10);
	if ($text == 'Controller') {
		$path = '../'.mb_strtolower($text).'s/';
		include $path.$class.'.php';
	}
	$text = substr($text, -5);
	if ($text == 'Model') {
		$path = '../'.mb_strtolower($text).'s/';
		include $path.$class.'.php';
	}


});