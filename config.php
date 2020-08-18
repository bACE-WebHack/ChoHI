<?php

	define('DB_SERVER','localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'toor');
	define('DB_NAME', 'web_study');

	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($link === false){
		die("ERROR: Could not connect. ".mysqli_connect_error());
	}

?>
