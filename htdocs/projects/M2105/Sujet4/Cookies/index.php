<?php 		//ici je vérifie si un cookie existe déjà.
	$date = 'Lors de ta dernière visite nous fûmes le ' . date('d/m/Y'). ' et il fut ' .date('H:i:s').'' ;
	if (!isset($_COOKIE['lastVisite'])) {		//si il n'existe pas je le crée et je l'indique dans la variable $first
		$first=TRUE;
		setcookie("lastVisite", $date, time()+60*60*24);
	}
	else {		//sinon, c'est qu'il existe, donc je l'indique aussi pour la suite.
	$first=FALSE;
	}

?>


<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique </p>
		</header>
		<section>
			<h1>
				<?php
					$suj = explode("/" , $_SERVER['PHP_SELF']);
			       		
					echo $suj[4];	

				?>
			- Exercice 3 (Cookies)			
			 </h1>

			<?php
				echo 'Nous sommes le ' . date('d/m/Y'). ' et il est ' .date('H:i:s').'' ;

				echo '<br>';
				echo '<br>';
			if ($first==FALSE ) {
				echo $_COOKIE['lastVisite'];			

			}
			else {
				echo "Bienvenue, il semblerait que ce soit ta première visite.";
			}
			?>


		</section>
	</body>
</html>



