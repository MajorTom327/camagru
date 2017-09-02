
<table class="p100" cellspacing="0" border=1>
<?php
	//include_once ("./inc/bdd.php");
		$host = "localhost";
		$base = "camagru";
		$user = "vthomas";
		$pass = "password";

		global $mysql;
		$mysql = new PDO("mysql:host=localhost;", $user, $pass);

		$cmd = [
			"DROP DATABASE IF EXISTS `$base`",
			"CREATE DATABASE `$base`",
			"USE `$base`",
			"CREATE TABLE `user` ( `id` INT NOT NULL , `username` INT NOT NULL , `email` INT NOT NULL , `password` INT NOT NULL ) ENGINE = InnoDB;"
		];

		echo "<tr><th colspan='2'>CREATION</th></tr>";
		foreach ($cmd as $key)
		{
			$req = $mysql->prepare($key);
			$state = "";
			if ($req->execute())
				$state = "<td class='success' style='text-align: center;'>SUCCESS</td>";
			else
				$state = "<td class='error' style='text-align: center;'>ERROR</td>";
			echo "<tr><td>$key</td>$state</tr>";
		}

?>
</table>
