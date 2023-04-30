<?php
	function debug ($var) {
		echo "<pre>"; 
		print_r($var); 
	        echo "</pre>";

	}


	function listeRep($unRep) {
		$allFic=array();
		if (is_dir($unRep) == FALSE) {  			//is_dir : Indique si le fichier est un dossier
			echo "{$unRep} n'est pas un répertoire !";
		}
		else {
			$rep = opendir($unRep);	
			// pendir() retourne un pointeur sur un dossier qui pour être utilisé avec les fonctions closedir(), readdir() et rewinddir(). 
			if ($rep == FALSE) {
				echo "Impossible d'ouvrir le répertoire {$unRep}";
			}	
			else {
				while (($fic = readdir($rep)) == TRUE) {
					//readdir() retourne le nom de la prochaine entrée du dossier identifié par dir_handle.
					// Les entrées sont retournées dans l'ordre dans lequel elles sont enregistrées dans le système de fichiers. 
					$allFic[]=$fic;
				}
			closedir($rep);		//Ferme le pointeur sur le dossier
			sort($allFic); 		//Trie un tableau
			}
		}	
		return $allFic;  //retourne la liste de tous les fichiers triés dans l'ordre alphabétique présent dans le répertoire donné en paramètre.
	}


?>
