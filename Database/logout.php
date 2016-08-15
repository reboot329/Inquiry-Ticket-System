<?php
session_start();
 function __autoload($class) {
	require_once $class . '.php';
   }
date_default_timezone_set('America/New_York');



	session_destroy();
	
	header('Location: index.php');
	
?>

