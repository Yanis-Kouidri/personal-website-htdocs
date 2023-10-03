


<?php
	echo ' <nav> 
			<ul>';
			
		include ("Outils/outils.php");
		$t=listeRep(".");
		$numSuj=1;
		foreach ($t as $num => $fic) {
			$fic = substr (''.$fic.'', 0 , 5 );
			if ($fic == "Sujet" ) {
				echo "<li> Sujet {$numSuj} ";
					echo '	<ul>
							<li> <a target="_blank" href="http://isis.unice.fr/~escazut/ext/M2105/Exercices/sujet'.$numSuj.'.php" > Énoncé </a> </li>
							<li> <a href="Sujet'.$numSuj.'"> Réponse </a> </li>
						</ul> 
					</li>';	
				$numSuj = $numSuj + 1 ;	

			}	
		
		}
		echo '<li> <a target="_blank" href="../Trombinouc/main.php">   Trombinouc </a> </li>  ';



	echo '		</ul>
		</nav>
		';



?>
