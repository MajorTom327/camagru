<?php
	$host = "localhost";
	$base = "camagru";
	$user = "vthomas";
	$pass = "password";

	global $mysql;
	$mysql = new PDO("mysql:host=localhost;dbname=$base", $user, $pass);
?>
