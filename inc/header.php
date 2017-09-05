<header class="main-color">
		<a href="?p=home">
			<img src="./res/title.png" class="main-title"></img>
		</a>
	<?php
		if (!isset($_SESSION['user']) || !isset($_SESSION['pass']) || $_SESSION['user'] == "" || $_SESSION['pass'] == "")//If not connected
		{
			$btn_connect = '<li><a class="btn info" href="?p=login" title=""><i class="fa fa-sign-in" aria-hidden="true"></i><span class="btn-legend"> '.$trad['menu']['connect'].'</span></a></li>';
			$btn_account = '';
		}
		else
		{
			$btn_connect = '<li><a class="btn info" href="?p=login&logout" title=""><i class="fa fa-sign-out" aria-hidden="true"></i><span class="btn-legend"> '.$trad['frequent']['log-out'].'</span></a></li>';
			$btn_account = '<li><a class="btn info" href="?p=account" title=""><i class="fa fa-user" aria-hidden="true"></i><span class="btn-legend"> '.$trad['menu']['account'].'</span></a></li>';
		}

	?>
	<nav id="main-menu">
		<ul>
			<li><a class="btn info" href="?p=home" title=""><i class="fa fa-home" aria-hidden="true"></i><span class="btn-legend"> <?=$trad['menu']['home']?></span></a></li>
			<?=$btn_connect?>
			<?=$btn_account?>
			<li><a class="btn info" href="?p=galerie" title=""><i class="fa fa-picture-o" aria-hidden="true"></i><span class="btn-legend"> <?=$trad['menu']['view']?></span></a></li>
			<li><a class="btn warning" href="?p=install" title=""><i class="fa fa-download" aria-hidden="true"></i><span class="btn-legend"> <?=$trad['menu']['install']?></span></a></li>
		</ul>
	</nav>
</header>
