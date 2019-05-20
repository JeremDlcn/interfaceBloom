<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=plante;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$sth = $bdd->query('SELECT * FROM mesures');
$sth2 = $bdd->query('SELECT * FROM plante');



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
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="/"><i class="fas fa-home"></i> &nbsp  Accueil</a>
			  <a class="flex-sm-fill text-sm-center nav-link active bg-success" href=" "><i class="fas fa-history"></i>  &nbsp  Historique</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="planter.php"><i class="fab fa-envira"></i> &nbsp Planter</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="add.php" tabindex="-1" aria-disabled="true"><i class="fas fa-plus-circle"></i> &nbsp Ajouter un type de plante</a>
			</nav>
			<div class="gear-container">
				<a href="parameter.php" class="gear"><i class="fas fa-cog "></i></a>
			</div>
		<!--Menu-->
 		<header>
			<p>Bloom</p>
		</header>
		<section>
	
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">Date</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Humidité</th>
			      <th scope="col">Température</th>
			      <th scope="col">Luminosité</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
						while ($row = $sth->fetch(PDO::FETCH_ASSOC) and $row2 = $sth2->fetch(PDO::FETCH_ASSOC)):
					?>

			    <tr>
			    	
			      <th scope="row"><?=$row['date']?></th>
			      <td><?=$row2['nom']?></td>
			      <td><?=$row['humidite']?>%</td>
			      <td><?=$row['temperature']?>°C</td>
			      <td>Niveau <?=$row['luminosite']?></td>
			    </tr>
			    	<?php
						endwhile;
					?>
			  </tbody>
			</table>
		</section>
		
	</body>
</html>


