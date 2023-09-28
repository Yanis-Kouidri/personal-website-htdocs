<?php
    include("./Outils/fonctions.php"); //le fichier avec les fonctions utiles
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Style/style_main_light.css" >
        <?php include 'Style/Icones/favicon_io/favicon.php'; ?>
        <title>Réalisations - Yanis KOUIDRI</title>
    </head>
    <body>
        <header>
            <h1> Mes réalisations </h1>
        </header>
        <nav class="navigation"> <h3> Navigation </h3>
            <ul>
                <li>
                    <a href="./index.php">
                        <span>Page d'accueil</span>
                    </a>
                </li>
            </ul>
        </nav>
        <h2> Documentations </h2>
        <div>
        Documents que j'ai pu écrire soit sur mon temps libre afin de garder un trace écrite propre soit lors des comptes-rendus de TP effectués durant mes études.
        </div>
        <nav>
            <?php afficheType("./Ressources/Documentations/", array(".pdf", ".html"));	//j'affiche tous les .pdf du dossier Ressources
            ?> 
        </nav>


        <h2> Projets </h2>
        <div>
        Liens vers les différents projets que j'ai pu réaliser durant mes études ou sur mon temps libre.
        </div>
        <nav>
            <ul>
                <li class="projet"><div> 
                    <a target="_blank" href="../Projets/Trombinouc/main.php">
                        <span>Trombinouc</span>  
                    </a> : Petit Facebook réalisé avec Maxime JUST lors sur module M2105 du DUT R&amp;T. Le but était de mettre en pratique nos compétences en PHP. </div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="../Projets/M2105/index.php">
                        <span>Exercices PHP</span>  
                    </a> : Série de petits exercices en PHP afin de maitriser les bases de ce langage. Dans le cadre du module M2105 du DUT R&amp;T. </div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="../Projets/M1106-ProjetWeb/Page_principale/page_principale.html">
                        <span>Quoi acheter</span>  
                    </a> : Site web de partage d'avis sur tout type de produits. Dans le cadre du module M1106 du DUT R&amp;T. Le but était d'écrire un site web uniquement en HTML 5 et CSS 3</div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="../Projets/M1106-JS/">
                        <span>Introduction à JavaScript</span>  
                    </a> : Série de petits exercices en JavaScript en utilisant la bibliothèque de <a target="_blank" href="https://jquery.com/">Jquery</a> . Réalisé dans le cadre du module M1106 du DUT R&amp;T.</div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="https://github.com/Yanis-Kouidri/Projet-Python">
                        <span>Découpeur de logs Apache</span>  
                    </a> : Programme en Python dont le but est de découper des logs Apache brutes, d'en faire un fichier json et à partir de ce json, de faire des statistiques. Réalisé dans le cadre du module M3206 du DUT R&amp;T.</div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="https://github.com/Quarfein/network-telecom-shell">
                        <span>Implémentation d'un shell</span>  
                    </a> : Programme en C dont le but est d'interpréter des commandes taper par l'utilisateur. 
                    Il n'est pas aussi avancé que certains shells comme le sh et bash utilisés sur les systèmes UNIX mais c'est un très bon exercice pour apprendre à développer et comprendre comment fonctionne un shell. 
                    Réalisé dans le cadre d'un projet scolaire lors du DUT R&amp;T. Le projet a duré 3 semestres.</div>
                </li>
                <li class="projet"><div> 
                    <a target="_blank" href="../Projets/E-portfolio/index.php">
                        <span>E-portfolio</span></a> 
                    : Site web de présentation réalisé dans le cadre du module Careers And Management (CAM) à l'ENSEEIHT.</div>
                </li>
            </ul>
        </nav>
        <?php include("./Outils/footer.php"); ?>
    </body>
</html>
