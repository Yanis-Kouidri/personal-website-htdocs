<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style_main_light.css">

    <?php include 'Style/Icones/favicon_io/favicon.php'; ?>

    <title>Yanis Kouidri</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur la page de Yanis KOUIDRI</h1>    
    </header>
    <nav class=navigation> <h3> Navigation </h3>
        <ul>
            <li>
                <a href="./realisations.php">
                    <span>Réalisations</span>
                </a>
            </li>
        </ul>
    </nav>

    <section>
        <h2>À propos de moi</h2>
        <div>
		    Actuellement en première année à l'ENSEEIHT (N7) dans la filière Sciences du Numérique (SN) en alternance à Thales Alenia Space Toulouse, 
		    je suis apprenti ingénieur.
        </div>
        <br>
        <div>
            J'ai créé ce site afin de pouvoir répertorier tous les travaux que j'ai pu réaliser durant mes études ou sur mon temps personnel.
        </div>
        <h3>Mes liens</h3>
        <div class="figures">
            <a href= "https://www.linkedin.com/in/yanis-kouidri/" style="text-decoration:none" class="icone">
                <figure class="icones">
                    <img src="./Style/Icones/linkedin.png" alt="Logo de LinkedIn"  height="50" width="50">
                <figcaption class="center">LinkedIn</figcaption>
                </figure>
            </a>
            <a href="https://github.com/Yanis-Kouidri" style="text-decoration:none" class="icone">
                <figure class="icones">
                        <img src="./Style/Icones/github.png" alt="Logo de GitHub"  height="50" width="50">
                    <figcaption class="center">GitHub</figcaption>
                </figure>
            </a>
            <a href="https://www.doyoubuzz.com/yanis-kouidri" style="text-decoration:none" class="icone">
                <figure class="icones">
                    <img src="./Style/Icones/doyoubuzz.png" alt="Logo de DoYouBuzz"  height="50" width="50">
                    <figcaption class="center">Mon CV</figcaption>
                </figure>
            </a>
            <a href="mailto:yanis.kouidri@gmail.com" style="text-decoration:none" class="icone">
                <figure class="icones">
                    <img src="./Style/Icones/gmail.png" alt="Logo de Gmail"  height="50" width="50">
                    <figcaption class="center" >Mon e-mail</figcaption>
                </figure>
            </a>
        </div>
    </section>

<?php include("./Outils/footer.php"); ?>

</body>
</html>
