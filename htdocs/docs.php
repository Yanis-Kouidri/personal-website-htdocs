<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("includes/head.html") ?>
    <title>Yanis Kouidri - Docs</title>
</head>
<body>
    <?php include("includes/header.html") ?>

    <section id="accueil">
        <h1>Documentations</h1>
        <p>Cette page regroupe mes documentations rédigées.</p>
    </section>

    <div>
        <ul id="docs-list">
        <?php
            // Chemin du dossier contenant les fichiers PDF et HTML
            $dossier = 'resources/docs/';

            // Utilisation de scandir() pour obtenir la liste des fichiers dans le dossier
            $fichiers = scandir($dossier);

            // Extensions autorisées
            $extensionsAutorisees = array('pdf', 'html');

            // Parcourir la liste des fichiers
            foreach ($fichiers as $fichier) {
                // Obtenir l'extension du fichier en lettres minuscules
                $extension = strtolower(pathinfo($fichier, PATHINFO_EXTENSION));

                // Vérifier si l'extension fait partie des extensions autorisées
                if (in_array($extension, $extensionsAutorisees)) {

                    // Obtenir le nom du fichier sans l'extension
                    $nomFichierSansExtension = pathinfo($fichier, PATHINFO_FILENAME);
                    
                    // Remplacer les underscores par des espaces
                    $nomFichierAffiche = str_replace('_', ' ', $nomFichierSansExtension);

                    // Afficher le lien vers le fichier PDF ou HTML
                    echo "<li><a href='$dossier$fichier'>$nomFichierAffiche</a></li>\n";
                }
            }
        ?>

        </ul>
    </div>


    <?php include("includes/footer.html") ?>
</body>
</html>