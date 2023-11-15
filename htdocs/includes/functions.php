<?php

function debug ($tab) {		//mini fonction qui permet de voir le contenu d'un tableau rapidement. Très utile pour débugger
	echo "<pre>";
	print_r($tab);
	echo "</pre>";
}

function listeRep ($unRep) { //Fonction qui permet de lister tous les fichiers d'un répertoire et de les retourner dans un tableau
	$allFic=array();
	if (is_dir($unRep) == FALSE) {
		echo "{$unRep} n'est pas un répertoire !";
	}
	else {
		$rep = opendir($unRep);
		if ($rep == FALSE) {
			echo "Impossible d'ouvrir le répertoire {$unRep}";
		}
		else { 
			while (($fic = readdir($rep)) == TRUE) {
				$allFic[]=$fic;
			}
			closedir($rep);
			sort($allFic);
		}
	}
	return $allFic;
}

/*cette fonction permet de lister les fichiers d'une certaine extention contenue dans le tableau $type à partir d'un tableau de fichier (de tout type).
Elle retourne un tableau de fichier selon le type voulu.
*/
function recup ($listeDeFichiers, $type) {		
	$lesfich =array();
	foreach($type as $untype){
		foreach($listeDeFichiers as $unfic) {
			$ext = substr ($unfic, -strlen($untype));
			if ( strcmp($ext, $untype) == 0 ) {
				$lesfich[] = $unfic;
			}	
		}
	}
	return $lesfich;
}

function nommage($nomBrut){ // Fonction qui permet de remplacer les caractères des nom de fichier pour qu'ils soient plus beau. Ex : L-entretien_de_recrutement devient L'entretien de recrutement.
	$trouve = array("&4","_"); //caractère à remplacer
	$remplace = array("'"," "); //caractère remplaçant
	return str_replace($trouve,$remplace,$nomBrut);

	
}

function afficheType ($repertoire, $type) {	//Fonction qui permet d'afficher une liste à puces (<ul> </ul>) de tous les fichiers d'extention présentes dans le tableau type (dans le tableau type (ex : .txt .pdf etc))
	$lesfichiers  = recup(listeRep ($repertoire), $type);
	echo '<ul>';
	foreach($lesfichiers as $unfic){
		foreach($type as $untype){
			$ext = substr ($unfic, -strlen($untype));
			if ( strcmp($ext, $untype) == 0 ) {
				$nom = substr($unfic, 0, -strlen($untype));
			}	
		}
		$nom = nommage($nom); //Rendre le nom plus beau pour l'affichage cf. nommage
		echo "<li> <a target=\"_blank\" href=\"{$repertoire}{$unfic}\"> <span> {$nom} </span> </a> </li> ";
	}
	echo '</ul>';


}

function afficherRepertoire($repertoire) {
    // Liste tous les fichiers avec l'extension .html dans le répertoire
    $fichiers = glob($repertoire . '*.html');

    // Parcours des fichiers HTML et affichage avec des liens
    foreach ($fichiers as $fichier) {
        // Obtention du nom du fichier
        $nomFichier = basename($fichier);

        // Création d'un lien vers le fichier HTML
        echo '<li><a href="' . $repertoire . $nomFichier . '">' . $nomFichier . '</a></li>';
    }
}


?>
