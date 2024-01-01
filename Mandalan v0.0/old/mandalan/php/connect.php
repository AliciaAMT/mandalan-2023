<?php

ob_start();
session_start();


//database credentials
define('DBHOST','localhost');
define('DBUSER','AliciaGuitar');
define('DBPASS','Gilbert123');
define('DBNAME','mandalantales');

$con = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//set timezone
date_default_timezone_set('Europe/London');

//load classes as needed
spl_autoload_register(function ($class) {
   
   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 	
	
	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
	
	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 		
	 
});


$user = new User($con); 

include('functions.php');







?>
