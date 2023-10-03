<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Module M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
		
		
		<!-- Le menu inclus depuis menu.html -->
<?php
	include ("../../menu.php");
?>
		
		<!-- Le contenu de la page (1 seule section suffit) -->		
		<section>
<!-- Début du HTML généré par PHP -->
<?php	
	$chemin=explode("/",$_SERVER['PHP_SELF']);
	echo "<h1>".$chemin[count($chemin)-3]." - ".$chemin[count($chemin)-2]."</h1>\n";

	if ($req = "maj" ) {
		echo "Tableau mis à jour :";
	}
?>		
<!-- Fin du HTML généré par PHP -->
		
			
	<ul>
		<?php
			include ("base.php");
			$sql = " SELECT * FROM EURO ";
			$req = $bd->prepare($sql);

			$req->execute();
			
			$lesDevises = $req->fetchall();

			$req->closeCursor();

			foreach ($lesDevises as $enre ) { // $enre correspont à un tableau assiciatif d'un enregistrement (champs => val)
				echo "<li> 1 {$enre['devise']} = {$enre['valeur']}€  </li>";
			}
		?>
	</ul>








		</section>
		
	</body>
</html>
