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
					
					//	debug($_POST['Montant']);
					//	debug($_POST['Devise']);
					
					
					$euro=array(	'Dinar algérien' 	=> 0.00916204,
							'Franc guinéen'		=> 0.000108068,
							'Livre libanaise' 	=> 0.000479533,
							'Ringgit malais'	=> 0.224482,
							'Dirham marocain'	=> 0.0892160,
							'Euro monégasque'	=> 1,
							'Rouble russe'		=> 0.0203145,
							'Franc CFA'		=> 0.00152449,
							'Dinar tunisien'	=> 0.459187
						);

					foreach($euro as $devise => $valeur) {

						if ($devise == $_POST['Devise'] ) {
						$res = $_POST['Montant']/$valeur;
						}
					



					}

					echo "{$_POST['Montant']}€ vaut {$res} {$_POST['Devise']}"  ;
					
				?>

			</div>		

		</section>


	</body>

	
</html>



