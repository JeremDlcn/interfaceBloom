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
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="historique.php"><i class="fas fa-history"></i>  &nbsp  Historique</a>
			  <a class="flex-sm-fill text-sm-center nav-link active bg-success" href=" "><i class="fab fa-envira"></i> &nbsp Planter</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="add.php" tabindex="-1" aria-disabled="true"><i class="fas fa-plus-circle"></i> &nbsp Ajouter un type de plante</a>
			</nav>
		<!--Menu-->
 		<header>
			<p>Bloom</p>
		</header>
		<section class="temphumid">
			<div class="card" style="width: 28rem;">
			  <img src="image/pot.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Vous voulez planter une nouvelle plante ?</h5>
			    <p class="card-text">Cliquez sur le bouton pour choisir la plante que vous souhaitez planter.</p>
				<div class="dropdown">
				  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Choissiez une plante
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				  	<?php
						while ($row = $sth->fetch(PDO::FETCH_ASSOC)):
					?>
					 <a class="dropdown-item" href="#"><?=$row['Nom']?></a>
				
			    	<?php
						endwhile;
					?>
				  
				  </div>
				</div>
			  </div>
			</div>
		</section>

			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>