<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique Sujet 2 Exercice 2 </p>
		</header>

		<section>
			<div>	

				<?php
					
					include("../../Outils/outils.php");
					include("./devises.php");	
					//	debug($_POST['Montant']);
					//	debug($_POST['Devise']);
					
				
					foreach($euro as $devise => $valeur) {

						if ($devise == $_POST['Devise'] ) {
							$res = $_POST['Montant']*$valeur;
						}
					}

					echo "{$_POST['Montant']} {$_POST['Devise']} vaut {$res} €"  ;
					
				?>

			</div>		
		</section>



	</body>

	
</html>



