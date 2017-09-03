<?php
	session_start();
	include_once("./inc/translate.php");
	try//AUTO INSTALL
	{
		include_once("./inc/bdd.php");
		include_once("./inc/function.php");

		createAccount();
		if (isset($_GET['logout']))
		{
			$_SESSION['user'] = "";
			$_SESSION['pass'] = "";
		}
		$c_user = "";
		$c_pass = "";

		if (isset($_SESSION['user']) && isset($_SESSION['pass']))
		{
			$c_user = htmlspecialchars($_SESSION['user']);
			$c_pass = htmlspecialchars($_SESSION['pass']);
		}
		if (isset($_POST['user']) && isset($_POST['pass']))
		{
			$c_user = htmlspecialchars($_POST['user']);
			$c_pass = htmlspecialchars($_POST['pass']);
		}


		if ($c_user != "" && $c_pass != "")
		{
			$req = $mysql->prepare("SELECT * FROM `users` WHERE `user` = :user AND `pass` = :pass");
			$old_pass = $c_pass;
			$c_pass = passwordify($c_user, $c_pass);

			$req->bindParam(":user", $c_user);
			$req->bindParam(":pass", $c_pass);

			if ($req->execute())
			{
				$rep = $req->fetchAll();
				if (count($rep) != 0)
				{
					$_SESSION['user'] = $c_user;
					$_SESSION['pass'] = $old_pass;
				}
				else
				{
					header('Location: ?p=home&error=connect');
					$_SESSION['user'] = "";
					$_SESSION['pass'] = "";
					exit();
				}
			}
			else
			{
				header('Location: ?p=home&error=connect');
				$_SESSION['user'] = "";
				$_SESSION['pass'] = "";
				exit();
			}
		}

	}
	catch (Exception $e)
	{
		header("Location: ?p=install");
	}

function createAccount()
{
	if (isset($_POST['action']) && $_POST['action'] == "create")
	{
		$req = $mysql->prepare("INSERT INTO `users` (`id`, `user`, `pass`, `mail`) VALUES (NULL, ':username', ':pass', ':mail')");
		$sign_pass = $_POST['pass'];
		$sign_user = $_POST['user'];
		$sign_mail = $_POST['mail'];

		$re = '/^([a-z0-9]+(?:[._-][a-z0-9]+)*)@([a-z0-9]+(?:[.-][a-z0-9]+)*\.[a-z]{2,})$/i';
		//preg_match($re, $sign_mail, $matches, PREG_OFFSET_CAPTURE, 0);
		//var_dump($matches);
		$req->bindParam(":username", $sign_user);
		$req->bindParam(":pass", $sign_pass);
		$req->bindParam(":mail", $sign_mail);
		$req->execute();
	}
}
?>
