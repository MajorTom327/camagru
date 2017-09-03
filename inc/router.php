<div id="main-container">
<?php

	$p = (isset($_GET['p'])) ? $_GET['p'] : "home";
	switch ($p)
	{
		case "home":
			include_once("./pages/home.php");
			break;
		case "login":
			include_once("./pages/login.php");
			break;
		case "install":
			include_once("./pages/install.php");
			break;
		case "signin":
			include_once("./pages/signin.php");
			break;
		default:
			include ("./pages/404.php");
	}
?>
</div>
