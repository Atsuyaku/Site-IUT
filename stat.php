<!DOCTYPE html>
<html>
	<head>
		<title>Projet SIN</title>
	<?php require_once('./templates/head.php');?>
	</head>
	<body>
		<?php session_start();if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {die(header("location: ./index.php"));}?>
		<header>
			<h1>Statistiques</h1>
		</header>
		<nav>
			<?php require_once('templates/nav.php');?>
		</nav>
		<div class="bordure">
			<section>
				<div class="temperature">
					<?php require_once('./templates/diagram.php');?>
				</div>
				<div class="luminosite">
				</div>
			</section>
		</div>
		<footer>
			<h5>Site développé en 2016/2017 par des élèves de Terminale STI2D SIN: Mediavilla, Beaubestre, Bonnet, Magueur, Baqué </h5>
		</footer>
	</body>
</html>
