<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=plante;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['nom']) && isset($_POST['categorie']) && isset($_POST['description']) && isset($_POST['humidite']) && isset($_POST['temperature']) && isset($_POST['luminosite']) && isset($_POST['periode'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO plante(nom, categorie, description, humidite, temperature, luminosite, periode) VALUES(:nom, :categorie, :description, :humidite, :temperature, :luminosite, :periode)');

    $req->execute(array(
        'nom' => $_POST['nom'],
        'categorie' => $_POST['categorie'],
        'description' => $_POST['description'],
        'humidite' => $_POST['humidite'],
        'temperature' => $_POST['temperature'],
        'luminosite' => $_POST['luminosite'],
        'periode' => $_POST['periode']
    ));

}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Bloom</title>
	</head>
	<body>
		<nav class="nav nav-pills flex-column flex-sm-row">
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="/"><i class="fas fa-home"></i> &nbsp  Accueil</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="historique.php"><i class="fas fa-history"></i>  &nbsp  Historique</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="planter.php "><i class="fab fa-envira"></i> &nbsp Planter</a>
			  <a class="flex-sm-fill text-sm-center nav-link active bg-success" href="add.php" tabindex="-1" aria-disabled="true"><i class="fas fa-plus-circle"></i> &nbsp Ajouter un type de plante</a>
		</nav>
		<!--Menu-->
 		<header>
			<p>Bloom</p>
		</header>
		<section class="d-flex flex-column paddingcote align-items-center>
			<form method="post" action="add.php">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1"> Nom du type de plante</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" name="nom">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Catégorie</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Nom de la catégorie" aria-label="Nom" aria-describedby="basic-addon1" name="categorie">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Description</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Description de la plante" aria-label="Nom" aria-describedby="basic-addon1" name="description">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Humidité</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Humidité" aria-label="Nom" aria-describedby="basic-addon1"name="humidite">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Température</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Température" aria-label="Nom" aria-describedby="basic-addon1" name="temperature">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Luminosité</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Luminosité" aria-label="Nom" aria-describedby="basic-addon1" name="luminosite">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">Période de floraison</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Période de floraison" aria-label="Nom" aria-describedby="basic-addon1" name="periode">
			</div>
			<input class="btn btn-success" type="submit" value="Ajouter">
			</form>
		</section>
		  		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>