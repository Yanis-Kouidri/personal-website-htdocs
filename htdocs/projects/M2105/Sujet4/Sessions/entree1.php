<?php
session_start();
	if ($_SESSION['auth'] != "YES" ){
		if ($_POST['login']!="boss" || $_POST['mdp']!= "boss") { // Authentification KO ou tentative de fraude
			header('Location:index.php?msg=err');
		  	exit();
		}
	}
		$_SESSION['auth'] = "YES" ;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Module M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>

		<!-- Un menu -->
<?php
	include("menu.php");
?>
		
		<!-- La section -->
		<section>
			<h1>Entrée 1</h1>
			
			<p>Bla bla bla</p>
		</section>
	</body>
</html>
