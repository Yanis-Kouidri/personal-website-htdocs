<?php
	$resp=array("maths"=>"M. Sinus", "info"=>"Mme. Intel");
	$tel=array("M. Sinus"=>"0601020304", "Mme. Intel"=>"0605060708");

	function annuaire ($nom) {
		$num = $tel[''.$nom.''];
		return $num;
	}
	


?>
