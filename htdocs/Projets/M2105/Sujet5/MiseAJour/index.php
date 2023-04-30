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

			<form action="./maj.php" method="post" > 
				<div>
					<label for="devise"> Devise à modifier </label> <!-- dinar, diram...  -->
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
					<label for="valeur"> Nouvelle valeur </label> <!-- pour un euro -->
					<input name="Valeur" id="valeur" type="number" required step="any">
				</div>

				</br>
				<div>
					<input type="submit" value="Mettre à jour cette devise">
				</div>

			</form>
			

				

				



		</section>
	</body>

	
</html>



