<!DOCTYPE html>
<html>
	<head>
		<title>Projet SIN</title>
	</head>
	<?php require_once('./templates/head.php');?>
	<body>
   	<header>
      	<h1>Statistiques</h1>
    	</header>
			<nav>
						<div id="menu">
							<ul>
								<li><a href="./index.php">Accueil</a></li>
								<li><a href="./hist.php">Historique</a></li>
								<li><a href="./stat.php">Statistiques</a></li>
								<li><a href="./config.php">Configuration</a></li>
							</ul>
						</div>
					</nav>

				<nav><?php require_once('templates/nav.php');?></nav>
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
