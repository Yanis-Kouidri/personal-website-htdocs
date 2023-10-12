<?php
    $db_servername = "db"; // Nom du service MySQL dans votre Docker Compose
    $db_username = getenv('DB_USERNAME'); // Utilisateur MySQL
    $db_password = getenv('DB_PASSWORD'); // Mot de passe défini lors de la création du conteneur MySQL
    $db_name = "trombinouc"; // Remplacez par le nom de votre base de données


    try {
        $conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);

        // Configuration pour afficher les erreurs PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion à la base de données réussie";
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }

?>