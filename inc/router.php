<div id="main-container">
<?php
	if (!isset($_GET['p']))
	{
		include ("./pages/404.php");
		exit();
	}
	$p = $_GET['p'];
	switch ($p)
	{
		case "home":
			include_once("./pages/home.php");
			break;
		default:
			include ("./pages/404.php");
	}
?>
</div>
