<?php
	session_start();

	if ($_SESSION['logged'] != 1 ) {
	    header('Location:./connexion.php?msg=nonco');
	    exit();
	}

	if ($_SESSION['username'] == $_GET ["usr"]) {
	    header('Location:./profil.php?usr=me');
	    exit();
	}	

	include("./Outils/base.php");
	include("./Outils/fonctions.php");
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
</head>
<body>
<a href="main.php">Home</a>
        <?php
            if ($_GET["usr"] == "me") {

                $val=array("pseudo" => $_SESSION["username"]);

                $sql = "SELECT * FROM USERS WHERE username = :pseudo";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                echo "<section><h1>Votre profil !</h1>
                <p>Vous êtes {$_SESSION["name"]}, et vous avez le pseudo {$_SESSION["username"]}.</p>";

                if ($enreg[0]["admin"] == 1) {
                    echo "<strong>Vous êtes admin.</strong>";
                }

                echo "</section>";

                echo "<section><h1>Vos amis :</h1>";

                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user2 WHERE FRIENDS.user1 = :pseudo AND FRIENDS.pending = 0";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p><a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> est ami avec vous.</p>";
                }

                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user1 WHERE FRIENDS.user2 = :pseudo AND FRIENDS.pending = 0";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p><a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> est ami avec vous.</p>";
                }



                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user2 WHERE FRIENDS.user1 = :pseudo AND FRIENDS.pending = 1";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p><a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> doit accepter...</p>";
                }

                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user1 WHERE FRIENDS.user2 = :pseudo AND FRIENDS.pending = 1";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p>Accepter <a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> en ami ?</p> <form method='POST' action='accepter.php'><button class='ami' name='ami' type='submit' value='{$friend["username"]}'>Accepter</button></form>
                    <form method='POST' action='refuser.php'><button class='ami' name='ami' type='submit' value='{$friend["username"]}'>Refuser</button></form>";
                }

                echo "</section>";

            } else if ($_GET["usr"] == null) {
                echo "<p>After all, the cake was a lie...</p>";
            } else {
                echo "<section><h1>Profil de {$_GET["usr"]}</h1>";

                $val=array("pseudo" => $_GET["usr"]);

                $sql = "SELECT * FROM USERS WHERE username = :pseudo";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                echo "<p>Voici le profil de {$enreg[0]['name']} {$enreg[0]['last_name']}.</p>";

                if ($enreg[0]["admin"] == 1) {
                    echo "<strong>Cette personne est admin.</strong>";
                }

                echo "</section>";

                echo "<section><h1>Ses amis :</h1>";

                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user2 WHERE FRIENDS.user1 = :pseudo AND FRIENDS.pending = 0";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p><a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> est ami avec cet utilisateur.</p>";
                }

                $sql = "SELECT * FROM FRIENDS INNER JOIN USERS ON USERS.username = FRIENDS.user1 WHERE FRIENDS.user2 = :pseudo AND FRIENDS.pending = 0";

                $req = $dbConnection->prepare($sql);

                $req -> execute($val);

                $enreg = $req -> fetchall();

                $req -> closeCursor();

                foreach ($enreg as $register => $friend){
                    echo "<p><a href='profil.php?usr={$friend['username']}'>{$friend['name']} {$friend['last_name']}</a> est ami avec cet utilisateur.</p>";
                }

                echo "</section>";

            }
        ?>
</body>
</html>
