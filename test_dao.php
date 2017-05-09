<?php 
include_once 'system/DAO.php';

echo "je suis dans test dao";

$datas = array(
		'nom' => "Duran",
		'prenom' => "Alain",
		'tel' => "00.11.22.33.44",
		'email' => "duran@gmail.com",
		'message' => "Mon message"
);

inserer($datas);





function inserer($champs){
	$table = "contact";
	
	$sql = "";
	
	$sql ="INSERT INTO {$table} VALUES (
				NULL,
				'{$champs['nom']}',
				'{$champs['prenom']}',
				'{$champs['tel']}',
				'{$champs['email']}',
				'{$champs['message']}'
				);";
	
	
	$dao = new DAO;
	if(!$dao->bddConnexion()){
		echo $dao->bddQuery($sql);
		$dao->bddDeconnexion();
	}
	else{
		echo "Erreur de Connexion BDD";
	}
	
	
	$sql2 = "SELECT * FROM {$table};";
	$dao2 = new DAO;
	if(!$dao2->bddConnexion()){
		$result = $dao2->bddQuery($sql2);
		while($obj = $result->fetch_assoc()){
			var_dump($obj);
		}
		
		
		$dao2->bddDeconnexion();
	}
	else{
		echo "Erreur de Connexion BDD";
	}
	
}





?>