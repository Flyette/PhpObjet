<?php 
class ViewContact{
	
	public function afficherForm(){
		//echo "je suis dans ma vue";
		$params = array(
			'content' => "contact"	
		);
		include 'templates/default.php';
	}
	
	public function afficherErreurDeSaisie($datas=array(),$partial='erreurBdd'){
		$params = array(
				'content' => "{$partial}"
		);
		include 'templates/default.php';
	}
	
	public function afficherResultat(){
		$params = array(
				'content' => "resultatBdd"
		);
		include 'templates/default.php';
	}
}


?>