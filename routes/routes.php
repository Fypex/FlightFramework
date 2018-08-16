<?php 

Flight::route('/', function(){
	Flight::render('index', array('title' => 'Flight'));
});
