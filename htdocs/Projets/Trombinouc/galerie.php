<?php
    include("./Outils/base.php");
    include("./Outils/fonctions.php");
	

	session_start();
	if ($_SESSION['logged'] != 1 ) {
		header('Location:./connexion.php?msg=nonco');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
	    <title> Galerie photos </title>
	</head>
	<body>
		<nav>	<a href="main.php">Home</a> </nav> 
<?php
	
	$galerie = listeRep("./Galerie/"); //je récupère tout le contenu du dossier Galerie.
	//debug($galerie);
	$lesphotos = recupPhotos($galerie);
	//debug($lesphotos);
	
	foreach($lesphotos as $photo){
			echo '<img src ="./Galerie/';
			echo $photo;
			echo '" width="50%" height="50%" />';
			echo "<br>";

	}
?>



	</body>
</html>
