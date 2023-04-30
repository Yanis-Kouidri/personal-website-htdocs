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

			<form action="./convert.php" method="post" > 
				<div>
					<label for="montant"> Montant en €  </label> <!-- J'avoue ici je me suis un peu trompé c'état pas vraiment ça la consigne -->
					<input name="Montant" id="montant" type="number" required>
				</div>
				<div>
					<label for="devise">Convertir en :</label> <!-- en fait il fallait faire n'importe quelle devise en euro et pas le contraire oupsi-->
					<select name="Devise" id="devise" required>


						<?php
						
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
							
							foreach ($euro as $nom => $val)	{
								echo "<option value=\"{$nom}\"> {$nom} </option> <br> " ;
							}
						
						?>

					</select>	



				</div>
				<div>
					<input type="submit" value="Convertir">
				</div>

			</form>
			

				<?php
				
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
					echo "<ul>";
					foreach ($euro as $nom => $val)	{
						echo "<li> 1 {$nom} = {$val} </li>  " ;
					}
					echo "</ul>";
				?>

				



		</section>
	</body>

	
</html>



