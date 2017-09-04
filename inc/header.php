<header class="main-color">
		<a href="?p=home">
			<img src="./res/title.png" class="main-title"></img>
		</a>
	<nav id="main-menu">
		<ul>
			<li><a class="btn info" href="?p=home" title="<?=$trad['menu']['home']?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<?php
			if (!isset($_SESSION['user']) || !isset($_SESSION['pass']) || $_SESSION['user'] == "" || $_SESSION['pass'] == "")
				echo '<li><a class="btn info" href="?p=login" title="'.$trad['menu']['connect'].'"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>';
			else
				echo '<li><a class="btn info" href="?p=login&logout" title="'.$trad['frequent']['log-out'].'"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>';
			?>
			<li><a class="btn info" href="?p=galerie" title="<?=$trad['menu']['view']?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
			<li><a class="btn warning" href="?p=install" title="<?=$trad['menu']['install']?>"><i class="fa fa-download" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
</header>
