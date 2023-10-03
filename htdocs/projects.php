<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanis Kouidri - Projects</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("includes/header.html") ?>

    <section id="accueil">
        <h1>Bienvenue sur ma page web</h1>
        <p>C'est la page des projets.</p>
    </section>

    <?php
        $repertoire = 'projects/'; // Remplacez ceci par le chemin vers votre dossier de projets

        // Vérifiez si le répertoire existe
        if (is_dir($repertoire)) {
            // Ouvrez le répertoire
            if ($dh = opendir($repertoire)) {
                echo '<ul>';
                
                // Parcourez les fichiers et dossiers dans le répertoire
                while (($fichier = readdir($dh)) !== false) {
                    if ($fichier != '.' && $fichier != '..') {
                        $chemin = $repertoire . $fichier;
                        
                        // Vérifiez si c'est un dossier
                        if (is_dir($chemin)) {
                            // Vérifiez s'il y a un fichier index.php ou index.html
                            if (file_exists($chemin . '/index.php')) {
                                echo '<li><a href="' . $chemin . '/index.php">' . $fichier . '</a></li>';
                            } elseif (file_exists($chemin . '/index.html')) {
                                echo '<li><a href="' . $chemin . '/index.html">' . $fichier . '</a></li>';
                            } else {
                                echo '<li><a href="' . $chemin . '">' . $fichier . '</a></li>';
                            }
                        }
                    }
                }
                
                echo '</ul>';
                
                // Fermez le répertoire
                closedir($dh);
            }
        } else {
            echo 'Le répertoire n\'existe pas.';
        }
        ?>



    <?php include("includes/footer.html") ?>
</body>
</html>