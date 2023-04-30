<?php

function debug ($tab) {		//mini fonction qui permet de voir le contenu d'un tableau rapidement.
	echo "<pre>";
	print_r($tab);
	echo "</pre>";

}

function listeRep ($unRep) {
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

function recupPhotos ($listeDeFichiers) {		//cette fonction permet de lister les photos à partir d'un tableau de fichier. Elle retourne un tableau de photos.
	$lesPhotos =array();
	foreach($listeDeFichiers as $unfic) {
		$ext = substr ($unfic, -4);
		if ( $ext == ".jpg" || $ext == ".png" ) {
			$lesPhotos[] = $unfic;
		}
	
	}

	

return $lesPhotos;
}

function recupPdf ($listeDeFichiers) {		//cette fonction permet de lister les pdf à partir d'un tableau de fichier. Elle retourne un tableau de pdf.
	$lesPdf =array();
	foreach($listeDeFichiers as $unfic) {
		$ext = substr ($unfic, -4);
		if ( $ext == ".jpg" || $ext == ".png" ) {
			$lesPdf[] = $unfic;
		}
	
	}

	

return $lesPdf;
}

?>
