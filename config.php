<?php
session_start();
	include("function.php");		
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "librarymanagement";
	
	$con = mysql_connect($host, $user, $pass);
	if(!$con)
		die('Could not connect'.mysql_error());
	
	mysql_select_db($db, $con);

?>
