<?php
		$host = "localhost";
		$base = "camagru_dev";
		$user = "root";
		$pass = "";

		global $mysql;

		$mysql = new PDO("mysql:host=$host;dbname=$base;charset=utf8", $user, $pass);
?>
