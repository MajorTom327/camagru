<?php
function passwordify($user, $pass)
{
	static $key = "OupsThisIsPotatoes";
	$ret = $user.$key.$pass;
	$ret = hash("whirlpool", $ret);
	return ($ret);
}
?>
