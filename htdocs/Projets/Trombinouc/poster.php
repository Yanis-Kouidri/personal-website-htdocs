<?php
	session_start();
	if ($_SESSION['logged'] != 1 ) {
		header('Location:./connexion.php?msg=nonco');
		exit();
	}

    	include("./Outils/base.php");
    	include("./Outils/fonctions.php");

	$sql = 'SELECT * FROM USERS ';
	$sql = $sql.'INNER JOIN FRIENDS ON username = user1 OR username = user2 '; 
	$sql = $sql.'WHERE admin = 1 AND pending = 0 AND (user1 = \'' .$_SESSION["username"]. '\' OR user2 = \''.$_SESSION["username"].'\')';
#	echo $sql;
	$req = $bd->prepare($sql);
	$req -> execute();
	$enreg = $req -> fetchall();
	$req -> closeCursor();
#	debug($enreg);

	$sql = 'SELECT admin FROM USERS ';
	$sql = $sql.'WHERE username = \''.$_SESSION["username"].'\'';
#	echo $sql;
	$req = $bd->prepare($sql);
	$req -> execute();
	$admin = $req -> fetchall();
	$req -> closeCursor();

#	debug($admin);

	if ($enreg[0] == null && $admin[0]["admin"] == 0){
		header('Location:./main.php?msg=no_admin_friend');
		exit();
	} 
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>Poster</title>
	</head>
	<body>
	<a href="main.php">Home</a>
			<p>Vous pouvez poster sur la page principale ici</p>
			<form method="POST" action="post.php">
				<p>
					<textarea id="text" name="text" type="text" maxlength="20000" rows="10" cols="50"  placeholder="Quoi de neuf ?" required></textarea>
				</p>
				<p>
					<button id="post" name="post" type="submit" value="poster"> Poster </button>
				</p>
			</form>
	</body>
</html>
