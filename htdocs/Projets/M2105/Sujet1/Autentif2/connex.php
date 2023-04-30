<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<h1>Sujet 1 - Exercice 3</h1>
		</section>
		
		<?php
		$login = htmlspecialchars($_POST['login']);
		$mdp = htmlspecialchars($_POST['mdp']);
		
		if ($login == "boss" && $mdp == "boss") {
			$date = date("Y/m/d",time());
			echo " <section> Bonsoir {$login}. On est le {$date} </section> " ;
		}
		else {
			Header ('Location:./index.php?Error=Login ou mot de passe incorrect. Veuillez recommencer.' );
			exit();
		}
		
		?>
	</body>
</html>
