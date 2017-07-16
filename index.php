<!DOCTYPE html>
<html>
	<head>
		<title>Camagru</title>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
		<link rel="stylesheet" type="text/css" href="css/camera.css"/>
	</head>
	<body>
		<?php include("inc/header.php"); ?>
		<section>
			<article>
				<div id="panel">
					<ul class="onglet">
						<li id="ong_cam" class="active" onclick="onglet_camera()"><a href="#">Camera</a></li>
						<li id="ong_gal" onclick="onglet_galerie()"><a href="#">Last Pictures</a></li>
					</ul>
				</div>
				<div id="camera_zone">
					<div id="filters">
						<ul>
							<li>filtre1</li>
							<li>filtre2</li>
							<li>filtre3</li>
							<li>filtre4</li>
							<li>filtre5</li>
							<li>filtre6</li>
							<li>filtre7</li>
							<li>filtre8</li>
							<li>filtre9</li>
						</ul>
					</div>
					<div id="camera">
						<video id="video" width="60%" poster="https://i2.wp.com/s3-ak.buzzfeed.com/static/2014-05/tmp/webdr05/12/19/anigif_eaa6a580d8aece464ad6ec5fd8670b68-0.gif"></video>
						<p>
							<button id="capture_button">SnapShot</button>
						</p>
						<canvas id="canvas"></canvas>
					</div>
					<div id="last_picture" style="text-align: center;">
						<img id="photo" alt="Last picture">
					</div>
				</div>
				<div id="galerie"></div>
			</article>
		</section>
		<?php include("inc/footer.php"); ?>
	</body>
</html>
