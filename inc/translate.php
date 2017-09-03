<?php

if (isset($_GET['lang']))
	$lang = htmlspecialchars($_GET['lang']);
else if (isset($_SESSION['lang']))
	$lang = htmlspecialchars($_SESSION['lang']);
else
	$lang = "fr";
$str = "";
switch ($lang)
{
	case "fr":
		$str = file_get_contents('./lang/fr.json');
		break;
	case "en":
		$str = file_get_contents('./lang/en.json');
		break;
	default:
		$str = file_get_contents('./lang/fr.json');
}
if ($str == "")
	$str = file_get_contents('./lang/fr.json');

$_SESSION['lang'] = $lang;
$trad = json_decode($str, true);
?>
