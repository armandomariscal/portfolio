<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Alice' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<header>
			<h1><?= $h1 ?></h1>
			<h2><?= $h2 ?></h2>
		</header>
		<section>
			<article>
				<p>
					<?= $p ?>
				</p>
			</article>
			<aside>
				<nav>
					<h3><?= $h3 ?></h3>
					<ul>
					<?php

						for ($i=1; $i < 6; $i++) { 

							echo '<li>'	. $li[$i] . '</li>';

						}

					?>
					</ul>
				</nav>
			</aside>
		</section>
		<footer>
			<?= $footer ?>
		</footer>
	</div>
</body>
</html>