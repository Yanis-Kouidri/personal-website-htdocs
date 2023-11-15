<?php include("../../includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des projets</h1>
    <ul>
        <li> Partie 1
            <ul>
                <?php
                    afficherRepertoire('./Partie_1/');
                ?>
            </ul>
        </li>
        <li> Partie 2
            <ul>
                <?php
                    afficherRepertoire('./Partie_2/');
                ?>
            </ul>
    
        </li>

    </ul>
</body>
</html>