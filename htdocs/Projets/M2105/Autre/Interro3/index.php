<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="./Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>

		<form method="POST" action="./script.php">
			<label for="lstMat"> Matières : </label>
			<select is="lstMat" name="lstMat">
				<?php
					include ("./outils.php");
					foreach( $resp as $mat => $nom ) {
						echo '<option value="'.$nom.'">'.$mat.' </option>  ';
					}
					
				?>
			
			</select>
			<button id="go" name="go" type="submit" value="go"> GO !</button>
		</form>

	</body>

	
</html>



