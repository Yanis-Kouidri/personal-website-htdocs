<!DOCTYPE html>
<html lang="fr"> 

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Outils/style.css" />
 		<title> Module M2105 : Web Dynamique</title>
	</head>

	<body>
		<header>
			<p> Module M2105 : Web dynamique </p>
		</header>
		<section>
			<h1>
				<?php
					$suj = explode("/" , $_SERVER['PHP_SELF']);
			       		
					echo $suj[4];	

				?>
			
			 </h1>

			<?php
				include ("../menu.php");	
			?>



			<?php
				include ("../Outils/afficherContenu.php");
			?>
		</section>
	</body>
</html>



