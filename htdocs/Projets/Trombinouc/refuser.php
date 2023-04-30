<?php

    session_start();
    include("./Outils/base.php");
    include("./Outils/fonctions.php");

    $sql = "DELETE FROM FRIENDS WHERE user1 = '".$_POST['ami']."' AND user2 = '". $_SESSION["username"]." ' ";

    $req = $bd->prepare($sql);
    
    $req -> execute();

    $req -> closeCursor();

    header("Location: profil.php?usr=me");
    exit();
?>
