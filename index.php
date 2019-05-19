<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=plante;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$sth = $bdd->query('SELECT * FROM plante.plante');
$sth2 = $bdd->query('SELECT * FROM plante.mesures');
$row = $sth->fetch(PDO::FETCH_ASSOC);
$row2 = $sth2->fetch(PDO::FETCH_ASSOC);
#var_dump($row)
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Bloom</title>
	</head>
	<body>
				<nav class="nav nav-pills flex-column flex-sm-row">
			  <a class="flex-sm-fill text-sm-center nav-link active bg-success" href="/"><i class="fas fa-home"></i> &nbsp  Accueil</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="historique.php"> <i class="fas fa-history"></i>  &nbsp  Historique</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="planter.php"><i class="fab fa-envira"></i> &nbsp Planter</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="add.php" tabindex="-1" aria-disabled="true"><i class="fas fa-plus-circle"></i> &nbsp Ajouter un type de plante</a>
		</nav>
		<!--Menu-->
 		<header>
			<p>Bloom</p>
		</header>

		<section class="info">
			<div class="temphumid">
				<div class="lumin">
					<p>Luminosité</p>
					<div class="borderlum"><img src="image/sun.png"/><span>Niveau <?=$row2['luminosite']?></span></div>
				</div>
				<div>
					<p>Température</p>
					<div class="bordertemp"><?=$row2['temperature']?>°C</div>
				</div>
				<div>
					<p>Humidité</p>
					<div class="borderhumid"><?=$row2['humidite']?>%</div>
				</div>
			</div>
			
		</section>

	</body>
</html>