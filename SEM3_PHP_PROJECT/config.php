<?php
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','tandt');
	 
	$con = mysqli_connect('localhost','root','','tandt');
	 
	if($con === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>