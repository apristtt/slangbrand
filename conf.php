<?php 
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$database = "slangbrand";

	$connect = mysql_connect($host, $user, $pass);
	if(! $connect){
		die(mysql_error());
	} else {
		// echo "Success";
		mysql_select_db($database);
	}

 ?>