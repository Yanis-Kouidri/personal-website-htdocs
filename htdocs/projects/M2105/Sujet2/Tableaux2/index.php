<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique Sujet 2 Exercice 3 </p>
		</header>

		<section>

			<form action="./convert.php" method="post" > 
				<div>
					<label for="montant"> Montant </label> 
					<input name="Montant" id="montant" type="number" required>
				</div>
				<br>
				<div>
					<label for="devise"> Devise </label> 
					<select name="Devise" id="devise" required>


						<?php
							include("./devises.php");
									
							foreach ($euro as $nom => $val)	{
								echo "<option value=\"{$nom}\"> {$nom} </option> <br> " ;
							}
						
						?>

					</select>	



				</div>
				<br>
				<div>
					<input type="submit" value="Convertir en euro">
				</div>

			</form>
			

				<?php
				include("./devises");	
				echo "<ul>";
					foreach ($euro as $nom => $val)	{
						echo "<li> 1 {$nom} = {$val} </li>  " ;
					}
					echo "</ul>";
				?>

				



		</section>
	</body>

	
</html>



