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
					<label for="montant"> Montant </label> 
					<input name="Montant" id="montant" type="number" required>
				</div>
				</br>
				<div>
					<label for="devise"> Devise </label> <!-- dinar, diram...  -->
					<select name="Devise" id="devise" required>


		<?php
		
			include ("base.php");
			$sql = " SELECT * FROM EURO ";
			$req = $bd->prepare($sql);

			$req->execute();
			
			$lesDevises = $req->fetchall();

			$req->closeCursor();

			foreach ($lesDevises as $enre ) { // $enre correspont à un tableau assiciatif d'un enregistrement (champs => val)
				echo "<option value=\"{$enre['devise']}\"> {$enre['devise']}  </option>";
		}

		
		?>

					</select>	



				</div>
				</br>
				<div>
					<input type="submit" value="Convertir en €">
				</div>

			</form>
			

				

				



		</section>
	</body>

	
</html>



