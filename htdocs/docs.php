<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanis Kouidri - Docs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("includes/header.html") ?>

    <section id="accueil">
        <h1>Bienvenue sur ma page web</h1>
        <p>C'est la page des documentation.</p>
    </section>

    <div>
        <ul id="docs-list">
            <?php
            // Chemin du dossier contenant les fichiers PDF
            $dossier = 'resources/docs/';

            // Utilisation de scandir() pour obtenir la liste des fichiers dans le dossier
            $fichiers = scandir($dossier);

            // Parcourir la liste des fichiers
            foreach ($fichiers as $fichier) {
                // Vérifier si le fichier a l'extension PDF
                if (pathinfo($fichier, PATHINFO_EXTENSION) === 'pdf') {

                    // Obtenir le nom du fichier sans l'extension
                    $nomFichierSansExtension = pathinfo($fichier, PATHINFO_FILENAME);
                    
                    // Remplacer les underscores par des espaces
                    $nomFichierAffiche = str_replace('_', ' ', $nomFichierSansExtension);

                    // Afficher le lien vers le fichier PDF
                    echo "<li><a href='$dossier$fichier'>$nomFichierAffiche</a></li>\n";
                }
            }
            ?>
        </ul>
    </div>


    <?php include("includes/footer.html") ?>
</body>
</html>