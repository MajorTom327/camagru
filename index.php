<!DOCTYPE html>
<html>
	<head>
		<title>Camagru</title>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/medium.css" media="all and (max-width: 800px)"/>
		<link rel="stylesheet" type="text/css" href="css/small.css" media="all and (max-width: 500px)"/>
	</head>
	<body>
		<?php include("inc/header.php"); ?>
		<!--CODE-->
		<section>
			<div id="left-switch" class="parent-switch dk-bg"></div>
			<article id="galerie">
				<h2 class="dk-bg">Galerie</h2>
			</article>
			<article id="view">
				<h2 class="dk-bg">Cam&eacute;ra</h2>
				<div id="camera-zone">
					<img src="http://4.bp.blogspot.com/-jUSw0BO8un8/T6QENBpE_sI/AAAAAAAABF8/UPD1pXzebwU/s1600/dr-who-rain.gif" alt="10th Rainning">
						<div id="bottom-btn">
							<span class="circle"></span>
						</div>
					</img>
				</div>
				<div id="stickers-edit" class="dk-bg">
					Zone d'edition de stickers
				</div>
			</article>
			<article id="filtres">
				<h2 class="dk-bg">Filtres</h2>
			</article>
			<div id="right-switch" class="parent-switch dk-bg"></div>
			<article id="art-car">
				<ul id="carousel">
					<li>&nbsp;</li>
					<li class="selected">&nbsp;</li>
					<li>&nbsp;</li>
				</ul>
			</article>
		</section>
		<?php include("inc/footer.php"); ?>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/extra.js"></script>
	</body>
</html>
