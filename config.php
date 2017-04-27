<!DOCTYPE html>
<html>
	<head>
		<title>Projet SIN</title>
		<?php require_once('./templates/head.php');?>
	</head>
	<body>
		<?php
			session_start();
			if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
					header('Location: ./index.php');
				exit();
			}
		?>
		<header>
			<h1>Configuration</h1>
		</header>
		<nav>
			<?php require_once('templates/nav.php');?>
		</nav>
		<div class="bordure">
			<section>
			</section>
		</div>
		<footer>
			<h5>Site développé en 2016/2017 par des élèves de Terminale STI2D SIN: Mediavilla, Beaubestre, Bonnet, Magueur, Baqué </h5>
		</footer>
	</body>
</html>
