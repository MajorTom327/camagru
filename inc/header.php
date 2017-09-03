<header class="main-color">
		<a href="?p=home">
			<img src="./res/title.png" class="main-title"></img>
		</a>
	<nav id="main-menu">
		<ul>
			<li><a class="btn info" href="?p=home">Home</a></li>
			<?php
			if (!isset($_SESSION['user']) || !isset($_SESSION['pass']) || $_SESSION['user'] == "" || $_SESSION['pass'] == "")
				echo '<li><a class="btn info" href="?p=login">Se connecter</a></li>';
			else
				echo '<li><a class="btn info" href="?p=login&logout">Se d&eacute;connecter</a></li>';
			?>
			<li><a class="btn info" href="?p=galerie">Galerie</a></li>
			<li><a class="btn warning" href="?p=install">dev install</a></li>
		</ul>
	</nav>
</header>
