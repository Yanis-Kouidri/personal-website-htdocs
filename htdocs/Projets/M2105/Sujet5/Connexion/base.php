<?php
	include ("/users/etudiant/k/ky002500/www/.ht_mysql.inc");
	
	try {
		$bd = new PDO ( 'mysql:host='.$server.';dbname='.$base, $user, $password ) ;
		$bd->exec('SET NAMES uft8');
	}
	catch (Exception $e) {
		die (" Erreur : connexion à la base impossible ");
	}
		
?>

