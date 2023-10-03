
<?php
	echo "<ul>";
	include("/users/etudiant/k/ky002500/Outils/outils.php");
	foreach(listeRep(".") as $num => $nom) {
		if ($nom != "." && $nom != ".." && $nom != "index.php"){
			echo "<li> Voir le repertoire <a href='./{$nom}'> {$nom} </a>  </li>  ";
		}
	}
	echo "</ul>" ;


?>

