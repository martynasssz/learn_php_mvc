<?php //define same constence
	//App Root

	//    echo __FILE__; // gives path to config file: C:\xampp\htdocs\oop\mvc\app\config\config.php
	//    echo dirname(__FILE__); //gives C:\xampp\htdocs\oop\mvc\app\config
	//    echo dirname(dirname(__FILE__));  //gives C:\xampp\htdocs\oop\mvc\app

	//SUKURIAM KONSTANTA
	define('APPROOT', dirname(dirname(__FILE__))); //from any file we access APPROOT

	//URL Root
	define('URLROOT', 'http://localhost/oop/mvc');

	//Site Name
	define('SITENAME', 'MVC');

