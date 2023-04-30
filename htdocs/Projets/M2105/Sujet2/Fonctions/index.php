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
			<h1> Sujet 2 - Exercice 1 </h1>
			<h2> Ceci est une page de test de la fonction debug </h2>
		

			<?php
				include ("../../Outils/outils.php");
			
				$stonk=99999;
				debug($stonk);


				$tab=array("Paris","Rome","Berlin","Tokyo","Osaka","Pékin");
				debug($tab);

				$tab2=array("DC" => "Washington DC", "NY" => "New York", "St" => "Seatle");
				debug($tab2);
			?>
		
		</section>
	</body>

	
</html>



