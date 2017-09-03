<header class="main-color">
		<a href="?p=home">
			<img src="./res/title.png" class="main-title"></img>
		</a>
	<nav id="main-menu">
		<ul>
			<li><a class="btn info" href="?p=home"><?=$trad['menu']['home']?></a></li>
			<?php
			if (!isset($_SESSION['user']) || !isset($_SESSION['pass']) || $_SESSION['user'] == "" || $_SESSION['pass'] == "")
				echo '<li><a class="btn info" href="?p=login">'.$trad['menu']['connect'].'</a></li>';
			else
				echo '<li><a class="btn info" href="?p=login&logout">'.$trad['menu']['disconnect'].'</a></li>';
			?>
			<li><a class="btn info" href="?p=galerie"><?=$trad['menu']['view']?></a></li>
			<li><a class="btn warning" href="?p=install"><?=$trad['menu']['install']?></a></li>
		</ul>
	</nav>
</header>
