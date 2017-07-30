<?php
		$host = "localhost";
		$base = "camagru_dev";
		$user = "root";
		$pass = "";

		global $mysql;

		$mysql = new PDO("mysql:host=$host;charset=utf8", $user, $pass);

		$cmd = ["DROP DATABASE IF EXISTS $base",
				"CREATE DATABASE `$base`",
				"USE $base",
				"CREATE TABLE `camagru_dev`.`stickers` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `img_txt` TEXT NOT NULL , `rights` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;"
				];
		echo "<table style='width: 100%;' border='1px' cellspacing='0'>";
		foreach ($cmd as $key)
		{
			$qr = $mysql->prepare($key);
			if ($qr->execute())
				echo "<tr><td><code>$key</code></td><td align='center'><b style='color: #27ae60; text-align: center;'>SUCCESS</b></td></tr>";
			else
				echo "<tr><td><code>$key</code></td><td align='center'><b style='color: #c0392b; text-align: center;'>ERROR</b></td></tr>";
		}
		echo "</table>";
		echo "<h3>INIT</h3>";
		$cmd = ["INSERT INTO `stickers` (`id`, `name`, `img_txt`, `rights`) VALUES (NULL, 'smile 1', 'stickers/s_1.png', '[1]')",
		"INSERT INTO `stickers` (`id`, `name`, `img_txt`, `rights`) VALUES (NULL, 'smile 1', 'stickers/s_2.png', '[1]')",
		"INSERT INTO `stickers` (`id`, `name`, `img_txt`, `rights`) VALUES (NULL, 'smile 1', 'stickers/s_3.png', '[1]')"
		];

		echo "<table style='width: 100%;' border='1px' cellspacing='0'>";
		foreach ($cmd as $key)
		{
			$qr = $mysql->prepare($key);
			if ($qr->execute())
				echo "<tr><td><code>$key</code></td><td align='center'><b style='color: #27ae60; text-align: center;'>SUCCESS</b></td></tr>";
			else
				echo "<tr><td><code>$key</code></td><td align='center'><b style='color: #c0392b; text-align: center;'>ERROR</b></td></tr>";
		}
		echo "</table>";
?>
<form style="text-align: center; width: 100%;">
	<button style="font-size: x-large">RELOAD</button>
</form>
