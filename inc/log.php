<?php
	session_start();
	include_once("./inc/translate.php");
	try//AUTO INSTALL
	{
		include_once("./inc/bdd.php");
		include_once("./inc/function.php");

		if (isset($_GET['action']) && $_GET['action'] == "create")
		{
			$req = $mysql->prepare("INSERT INTO `users` (`id`, `user`, `pass`, `mail`) VALUES (NULL, :username, :pass, :mail)");
			$sign_pass = $_POST['pass'];
			$sign_user = htmlspecialchars($_POST['user']);
			$sign_mail = htmlspecialchars($_POST['mail']);

			$re = '/^([a-z0-9]+(?:[._-][a-z0-9]+)*)@([a-z0-9]+(?:[.-][a-z0-9]+)*\.[a-z]{2,})$/i';
			//preg_match($re, $sign_mail, $matches, PREG_OFFSET_CAPTURE, 0);
			//var_dump($matches);
			$sign_pass = passwordify($sign_user, $sign_pass);
			$req->bindParam(":username", $sign_user);
			$req->bindParam(":pass", $sign_pass);
			$req->bindParam(":mail", $sign_mail);
			$req->execute();

			$req = $mysql->prepare("SELECT `id` FROM `users` WHERE `user` = :username AND `pass` = :pass AND `mail` = :mail");
			$req->bindParam(":username", $sign_user);
			$req->bindParam(":pass", $sign_pass);
			$req->bindParam(":mail", $sign_mail);
			$req->execute();
			$tmp_id = $req->fetch();
			$tmp_id = intval($tmp_id['id']);
			$req = $mysql->prepare("INSERT INTO `extended_users` (`id`, `type`) VALUES (:id, '1');");
			$req->bindParam(":id", $tmp_id);
			$req->execute();
		}
		else
		{
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
			if (isset($_POST['user']) && isset($_POST['pass']) && isset($_GET['action']) && $_GET['action'] == "login")
			{
				$c_user = htmlspecialchars($_POST['user']);
				$c_pass = htmlspecialchars($_POST['pass']);
			}


			if ($c_user != "" && $c_pass != "")
			{
				$req = $mysql->prepare("SELECT `id` FROM `users` WHERE `user` = :user AND `pass` = :pass");
				$old_pass = $c_pass;
				$c_pass = passwordify($c_user, $c_pass);

				$req->bindParam(":user", $c_user);
				$req->bindParam(":pass", $c_pass);

				if ($req->execute())
				{
					$rep = $req->fetch();
					if (count($rep) != 0)
					{
						$_SESSION['user'] = $c_user;
						$_SESSION['pass'] = $old_pass;
						$tmp_id = intval($rep['id']);
						$req = $mysql->prepare("SELECT `type` FROM `extended_users` WHERE `id` = :id;");
						$req->bindParam(":id", $tmp_id);
						$req->execute();
						$account_type = $req->fetch();
						$account_type = intval($account_type['type']);
						switch ($account_type)
						{
							case 0:
								$account_type = "admin";
								break;
							case 1:
							default:
								$account_type = "user";
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
				else
				{
					header('Location: ?p=home&error=connect');
					$_SESSION['user'] = "";
					$_SESSION['pass'] = "";
					exit();
				}
			}
		}
	}
	catch (Exception $e)
	{
		header("Location: ?p=install");
	}

?>
