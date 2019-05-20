<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=plante;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


if(isset($_POST['mail'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO user(mail) VALUES(:mail)');

    $req->execute(array(
        'mail' => $_POST['mail']
    ));

}

$sth = $bdd->query('SELECT * FROM user ORDER BY id DESC');
$row = $sth->fetch(PDO::FETCH_ASSOC);
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
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="historique.php"> <i class="fas fa-history"></i>  &nbsp  Historique</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="planter.php"><i class="fab fa-envira"></i> &nbsp Planter</a>
			  <a class="flex-sm-fill text-sm-center nav-link text-success" href="add.php" tabindex="-1" aria-disabled="true"><i class="fas fa-plus-circle"></i> &nbsp Ajouter un type de plante</a>
			  </nav>
			  <div class="gear-container">
				<a href="index.php" class="gear"><i class="fas fa-cog "></i></a>
			  </div>

		<!--Menu-->
 		<header>
			<p>Bloom</p>
		</header>
		<section>
			<div class="mediagear">
			  <img src="image/man.jpg" class="mr-3" alt="...">
			  <div class="media-body mediagear">
			    <h5 class="mt-0">Michel Rillette</h5>
			    Adresse mail actuelle : <?= $row['mail'] ?>
			  </div>
			</div>


			<form class="mediagear" action="parameter.php" method="post">
				<div class="input-group mb-3 paddingcote">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">Adresse Mail</span>
				  </div>
				  <input type="text" class="form-control" placeholder="Entrez votre nouvelle adresse mail" aria-label="Nom" aria-describedby="basic-addon1" name="mail">
				</div>
					<input class="btn btn-success" type="submit" value="Ajouter">
			</form>
		</section>

	</body>
</html>