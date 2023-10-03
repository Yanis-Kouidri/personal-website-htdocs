<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique Sujet 5 Exercice 2 </p>
		</header>
	
		<section>

			<div>	

				<?php
					
					include("../../Outils/outils.php");
					
					//	debug($_POST['Montant']);
					//	debug($_POST['Devise']);
					

				
					include ("base.php");
					$sql = " SELECT * FROM EURO ";
					$req = $bd->prepare($sql);

					$req->execute();
					
					$lesDevises = $req->fetchall();

					$req->closeCursor();
					
					
					foreach ( $lesDevises as $enre ) {
						$euro[ $enre['devise'] ] = $enre['valeur'] ; //je crée un nouveau tableau euro plus simple à utiliser
					}	


					$res = $_POST['Montant'] * $euro[$_POST['Devise']] ;

					echo "{$_POST['Montant']} {$_POST['Devise']} vaut {$res} €"  ;
					
				?>

			</div>		

		</section>


	</body>

	
</html>



