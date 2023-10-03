<?php
	include ("base.php");
	$sql = "UPDATE EURO
		SET valeur = {$_POST['Valeur']}
		WHERE devise = '{$_POST['Devise']}' ";

	$req = $bd->prepare($sql);
	$req->execute();

	$req->closeCursor();
	
	header('Location: ../Connexion/index.php?req=maj');
	exit();

?>
