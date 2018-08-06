<?php 

Flight::route('/', function(){
	Flight::render('index');
});

Flight::map('notFound', function(){
	Flight::render('index');
});