<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique Sujet 3 Exercice 1 </p>
		</header>
			
			<h1> Ceci est une page de test de la fonction listeRep </h1>
			<h2>Contenu de mon répertoire <code>M2105</code> : </h2>
		<section>
			<?php
				include ("../../Outils/outils.php");	
	
				echo "Test de la fonction listeRep : ";
				echo "<ul>";
				foreach (listeRep("../../../M2105/") as $num => $dossier ) {
					echo "<li> {$dossier} </li>" ;
				}	
				echo "</ul>";

			?>
		</section>
	</body>

	
</html>



