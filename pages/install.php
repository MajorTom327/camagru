
<table class="p100" cellspacing="0" border=1>
<?php
	//include_once ("./inc/bdd.php");
		$host = "localhost";
		$base = "camagru";
		$user = "vthomas";
		$pass = "password";

		$mysql = new PDO("mysql:host=localhost;", $user, $pass);

		$cmd = [
			"DROP DATABASE IF EXISTS `$base`",
			"CREATE DATABASE `$base`",
			"USE `$base`",
			"CREATE TABLE `users` ( `id` INT NOT NULL AUTO_INCREMENT , `user` TINYTEXT NOT NULL , `pass` MEDIUMTEXT NOT NULL , `mail` TINYTEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;",
			"CREATE TABLE `camagru`.`extended_users` ( `id` INT NOT NULL , `type` INT NOT NULL ) ENGINE = InnoDB;"
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

		$cmd = [
			"INSERT INTO `users` (`id`, `user`, `pass`, `mail`) VALUES (NULL, 'admin', 'ed8c01fbdb1d17300de83a4afe0c036851cb45e90602cf70ba4a394b4b4d62b35e857d51537b4b95f95edb1a213407fa8b95293ea19c0e37b1728602e519f5f9', 'vthomas@student.42.fr')",
			"INSERT INTO `extended_users` (`id`, `type`) VALUES ('1', '0');",
		];
		echo "<tr><th colspan='2'>INIT</th></tr>";
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
	$co_user = "admin";
	$co_pass = passwordify("admin", "admin");
	echo "<tr><td>$co_user</td><td>$co_pass</td></tr>";
?>
</table>
